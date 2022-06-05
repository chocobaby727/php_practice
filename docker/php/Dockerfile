FROM php:buster

WORKDIR /var/www/html

ARG USERNAME=${USERNAME}
ARG USER_UID=${USER_UID}
ARG USER_GID=${USER_GID}
ENV HOME=/home/$USERNAME

# ユーザの作成
RUN groupadd --gid $USER_GID $USERNAME && \
    useradd --uid $USER_UID --gid $USER_GID -m $USERNAME && \
    chown -R $USER_UID /var/www/html && \
    # sudoを可能にする
    apt-get update && \
    apt-get install -y sudo && \
    echo $USERNAME ALL=\(root\) NOPASSWD:ALL > /etc/sudoers.d/$USERNAME && \
    chmod 0440 /etc/sudoers.d/$USERNAME

USER $USERNAME

EXPOSE 80