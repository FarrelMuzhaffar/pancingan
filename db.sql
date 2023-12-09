create table tbl_pancing
(
    id       int auto_increment primary key,
    judul    varchar(100) not null,
    isi      varchar(255) not null,
    kategori varchar(50)  not null
);

INSERT INTO db_blog.tbl_blog (id, judul, isi, kategori) VALUES (1, 'test1', 'test1', 'test1');
INSERT INTO db_blog.tbl_blog (id, judul, isi, kategori) VALUES (2, 'test2', 'test2', 'test2');
INSERT INTO db_blog.tbl_blog (id, judul, isi, kategori) VALUES (3, 'test3', 'test3', 'test3');


CREATE TABLE `pancingan`.`tb_barang` (`id_barang` VARCHAR(6) NOT NULL , `nama_barang` VARCHAR(50) NOT NULL , `harga` INT NOT NULL , `stok` INT(4) NOT NULL , PRIMARY KEY (`id_barang`)) ENGINE = InnoDB;


CREATE TABLE `pancingan`.`tb_pelanggan` (`id_pelanggan` INT NOT NULL AUTO_INCREMENT , `nama_pelanggan` VARCHAR(35) NOT NULL , `alamat` VARCHAR(50) NOT NULL , PRIMARY KEY (`id_pelanggan`)) ENGINE = InnoDB;


CREATE TABLE tb_beli (
    id_beli INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_pelanggan INT,
    id_barang VARCHAR(6),
    tanggal_beli TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_beli INT,
    total_harga DECIMAL(10, 2),
    FOREIGN KEY (id_pelanggan) REFERENCES tb_pelanggan(id_pelanggan),
    FOREIGN KEY (id_barang) REFERENCES tb_barang(id_barang)
);