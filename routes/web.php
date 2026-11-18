<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'company' => 'nullable|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:50',
        'product' => 'nullable|string|max:100',
        'quantity' => 'nullable|string|max:100',
        'packaging' => 'nullable|string|max:100',
        'trade_terms' => 'nullable|string|max:100',
        'message' => 'nullable|string|max:2000',
    ]);

    $lines = [
        "🌾 *New Procurement Inquiry - Jain Agro Industries*",
        "",
        "👤 *Name:* " . $validated['name'],
    ];

    if (!empty($validated['company'])) {
        $lines[] = "🏢 *Company:* " . $validated['company'];
    }

    $lines[] = "📧 *Email:* " . $validated['email'];
    $lines[] = "📞 *Phone / WhatsApp:* " . $validated['phone'];

    if (!empty($validated['product'])) {
        $lines[] = "📦 *Commodity:* " . $validated['product'];
    }

    if (!empty($validated['quantity'])) {
        $lines[] = "⚖️ *Volume / Order Size:* " . $validated['quantity'];
    }

    if (!empty($validated['packaging'])) {
        $lines[] = "🛍️ *Packaging:* " . $validated['packaging'];
    }

    if (!empty($validated['trade_terms'])) {
        $lines[] = "🚢 *Trade Terms:* " . $validated['trade_terms'];
    }

    if (!empty($validated['message'])) {
        $lines[] = "📝 *Specifications / Port:* " . $validated['message'];
    }

    $messageText = implode("\n", $lines);
    $whatsappUrl = "https://wa.me/919752775435?text=" . rawurlencode($messageText);

    if ($request->wantsJson()) {
        return response()->json([
            'status' => 'success',
            'whatsapp_url' => $whatsappUrl,
        ]);
    }

    return redirect()->away($whatsappUrl);
})->name('contact.submit');
