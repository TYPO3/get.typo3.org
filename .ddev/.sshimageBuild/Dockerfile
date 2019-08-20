
ARG BASE_IMAGE
FROM $BASE_IMAGE

ARG username
ARG uid
ARG gid
RUN (groupadd --gid $gid "$username" || groupadd "$username" || true) && (useradd  -m --gid "$username" --comment '' --uid $uid "$username" || useradd   -m --gid "$username" --comment '' "$username")
 