docker build -t zepe-app-server .;
docker rm -f zepe-apk-server;
docker run -dit --name zepe-apk-server -p 8999:80 zepe-app-server
