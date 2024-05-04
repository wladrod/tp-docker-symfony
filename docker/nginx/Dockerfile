FROM nginx:1.25.5

ARG UID

RUN adduser appuser
RUN usermod -aG sudo appuser

COPY default.conf /etc/nginx/conf.d/
