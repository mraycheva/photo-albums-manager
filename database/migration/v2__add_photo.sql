create table photo
(
    id         bigint auto_increment
        primary key,
    name       varchar(20) not null,
    content    mediumblob  not null,
    album_id bigint      not null,
    extension  varchar(10) not null,
    constraint photo_album_id_fk
        foreign key (album_id) references album (id)
            on update cascade on delete cascade
)
    engine = InnoDB;
