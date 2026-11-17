#!/bin/bash

# Ensure frontend assets are built for production
echo "📦 Building assets for remote client..."
npm run build

# Check if artisan serve is already running on port 8000
if ! lsof -i :8000 >/dev/null 2>&1; then
    echo "🚀 Starting Laravel server on port 8000..."
    php artisan serve --port=8000 > /dev/null 2>&1 &
    SERVE_PID=$!
    trap "kill $SERVE_PID 2>/dev/null" EXIT
    sleep 2
else
    echo "✅ Laravel server is already active on port 8000."
fi

echo ""
echo "🌐 Starting Cloudflare Quick Tunnel..."
echo "Share the https://*.trycloudflare.com URL shown below with your client."
echo "Press Ctrl+C when you want to stop sharing."
echo "------------------------------------------------------------------------"
cloudflared tunnel --url http://127.0.0.1:8000
