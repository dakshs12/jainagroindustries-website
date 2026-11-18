<?php

test('homepage returns a successful response', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});

test('about page returns a successful response', function () {
    $response = $this->get('/about');
    $response->assertStatus(200);
});

test('products page returns a successful response', function () {
    $response = $this->get('/products');
    $response->assertStatus(200);
});

test('contact page returns a successful response', function () {
    $response = $this->get('/contact');
    $response->assertStatus(200);
    $response->assertSee('Connect With');
    $response->assertSee('Request a Quote');
    $response->assertSee('Barnagar');
});

test('contact form redirects to whatsapp with inquiry details', function () {
    $response = $this->post('/contact', [
        'name' => 'Al-Noor Trading',
        'company' => 'Al-Noor International',
        'email' => 'trade@alnoor.com',
        'phone' => '+971501234567',
        'product' => 'Kabuli Chickpeas (Dollar Chana)',
        'quantity' => '2 x 20ft FCL',
        'packaging' => 'Standard 50kg PP Bags',
        'trade_terms' => 'CIF Destination Port',
        'message' => 'Please quote CIF Jebel Ali port.',
    ]);

    $response->assertRedirectContains('https://wa.me/919752775435');
    $response->assertRedirectContains('Al-Noor%20Trading');
});
