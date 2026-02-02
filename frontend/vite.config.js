import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";

export default defineConfig({
  plugins: [react()],
  server: {
    host: '0.0.0.0',        // allows container to accept external connections
    port: 5173,             // default Vite port
    strictPort: true,
    watch: {
      usePolling: true,     // enables hot reload in Docker
      interval: 100
    }
  }
});
