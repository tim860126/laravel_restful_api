#FROM node:18 as dev-stage
#WORKDIR /app
#COPY package*.json ./
#RUN npm install npm@9.4.0
#RUN npm install --fetch-timeout=600000
#COPY ./ .

#EXPOSE 8080

#CMD [ "npm", "run", "serve"]

FROM node:18 as build-stage
WORKDIR /app
COPY package*.json ./
#RUN npm install
COPY ./ .
RUN npm run build

FROM nginx as production-stage
EXPOSE 3000
RUN mkdir /app
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY --from=build-stage /app/dist /usr/local
