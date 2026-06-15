FROM nginx:1.29.0
# Copy the public directory
COPY ./src/ /app/

# Copy the nginx config file
COPY ./docker/nginx/nginx.conf /etc/nginx/conf.d/default.conf