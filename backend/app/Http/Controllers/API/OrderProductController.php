<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderProductResource;
use App\Models\Notification;
use App\Models\Order;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get authenticated user (customer)
        $user = Auth::user();

        // Retrieve orders for the authenticated user
        $orders = Order::where('user_id', $user->id)->with('product')->get();

        return response()->json(['success' => true, 'data' => $orders], 200);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1',
            'color_id' => 'required|exists:colors,id',
            'size_id' => 'required|exists:sizes,id',
        ]);

        $order = Order::createOrder($validatedData);

        return response()->json(['message' => 'Order created successfully', 'order' => $order], 201);
    }
   
    public function show($id)
    {
        // Get authenticated user (customer)
        $user = Auth::user();

        // Find the order with products for the authenticated user
        $order = Order::where('user_id', $user->id)->with('products')->findOrFail($id);

        return response()->json(['success' => true, 'data' => $order], 200);
    }


    public function cancel($id)
    {
        {
            $user = Auth::user();
            $order = Order::where('user_id', $user->id)->findOrFail($id);
    
            $order->status = 'cancelled';
            $order->save();
    
            // Create a notification for order cancellation
            Notification::create([
                'user_id' => $user->id,
                'notification_type' => 'order_cancelled',
                'notification_text' => 'Your order has been cancelled.',
                'notification_data' => json_encode([
                    'order_id' => $order->id,
                    'cancelled_at' => now(),
                ]),
                'read' => false,
            ]);
    
            return response()->json(['message' => 'Order cancelled successfully'], 200);
        }
    }
    public function confirm(Request $request, $id)
    {
        $user = Auth::user();
        $order = Order::findOrFail($id);

        // Confirm the order
        $order->confirmOrder();

        // Create a notification for order confirmation
        Notification::create([
            'user_id' => $order->user_id,
            'notification_type' => 'order_confirmed',
            'notification_text' => 'Your order has been confirmed.',
            'notification_data' => json_encode([
                'order_id' => $order->id,
                'confirmed_at' => now(),
            ]),
            'read' => false,
        ]);

        return response()->json(['message' => 'Order confirmed successfully'], 200);
    }



    public function reactivate($id)
    {
        $order = Order::findOrFail($id);

        if ($order->reactivate()) {
            return response()->json(['message' => 'Order reactivated successfully', 'order' => $order], 200);
        } else {
            return response()->json(['message' => 'Order is not cancelled, cannot reactivate'], 400);
        }
    }


}
