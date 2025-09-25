/** @type {import('next').NextConfig} */
const nextConfig = {
  // Enable static exports
  output: 'export',

  // Disable image optimization, as it is not supported on static hosts
  images: {
    unoptimized: true,
  },
};

export default nextConfig;
