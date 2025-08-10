#!/bin/sh

# Install dependencies jika node_modules belum ada
if [ ! -d "node_modules" ]; then
  npm install
fi

# Jalankan dev server
npm run dev