from http.server import HTTPServer, SimpleHTTPRequestHandler
import sys
import os

class CustomHTTPRequestHandler(SimpleHTTPRequestHandler):
    def do_POST(self):
        content_length = int(self.headers.get('Content-Length', 0))
        post_data = self.rfile.read(content_length)
        print(f"POST request received on {self.path}: {post_data.decode('utf-8', errors='ignore')}")
        
        self.send_response(200)
        self.send_header('Content-Type', 'text/html; charset=utf-8')
        self.end_headers()
        self.wfile.write(b"<html><body><h2>Order Received Successfully!</h2></body></html>")

if __name__ == '__main__':
    os.chdir(r'c:\Users\hp\OneDrive\Desktop\ayshveda2\stamminabooster.online')
    server_address = ('', 8080)
    httpd = HTTPServer(server_address, CustomHTTPRequestHandler)
    print("Serving custom server with POST support on http://localhost:8080 ...")
    httpd.serve_forever()

