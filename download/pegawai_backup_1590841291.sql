

CREATE TABLE `jadwalku` (
  `jadwal_id` int(10) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`jadwal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO jadwalku VALUES("6","2015-01-12 12:11:22","Tes","Tess");
INSERT INTO jadwalku VALUES("7","2018-10-13 12:03:00","Pemberian Pakan","Pemberian pakan jagung");
INSERT INTO jadwalku VALUES("8","2018-10-31 14:00:00","Pemberian Obat","Pemberian Obat Delatrin");
INSERT INTO jadwalku VALUES("9","2018-08-08 06:00:00","Pemberian Pakan","Pemberian pakan dedak");



CREATE TABLE `stok_obat` (
  `obat_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_suplier` int(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  PRIMARY KEY (`obat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO stok_obat VALUES("1","Delatrin","12","123","1","2018-10-29","2018-10-31","Mencegah dan mengobati infestasi ektoparasit (kutu, tungau, caplak, lalat, dan kutu franky");
INSERT INTO stok_obat VALUES("2","Zaldes","12","123","2","2018-10-11","2018-10-31","Desinfektan");
INSERT INTO stok_obat VALUES("3","ALBENOL-100 ORAL","13","124","4","2018-10-05","2018-10-31","Untuk obat cacing");
INSERT INTO stok_obat VALUES("4","Paracetamol","198","123","6","2018-10-01","2018-10-30","deskripsi
                         ");



CREATE TABLE `stok_pakan` (
  `pakan_id` int(9) NOT NULL AUTO_INCREMENT,
  `nama_pakan` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_suplier` int(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  PRIMARY KEY (`pakan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO stok_pakan VALUES("1","Jagung","22","123","1","2018-10-01","2018-10-31");
INSERT INTO stok_pakan VALUES("2","Bekatul","200","123","2","2018-10-01","2019-04-05");
INSERT INTO stok_pakan VALUES("3","Jagung","3","122","1","2015-09-30","2015-10-29");



CREATE TABLE `t_kategoriobat` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO t_kategoriobat VALUES("1","Delatrin");
INSERT INTO t_kategoriobat VALUES("2","Zaldes");
INSERT INTO t_kategoriobat VALUES("4","ALBENOL-100 ORAL");
INSERT INTO t_kategoriobat VALUES("5","INTERTRIM LA");
INSERT INTO t_kategoriobat VALUES("6","Paracetamol");



CREATE TABLE `t_kategoripakan` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pakan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO t_kategoripakan VALUES("1","Jagung");
INSERT INTO t_kategoripakan VALUES("2","Bekatul");
INSERT INTO t_kategoripakan VALUES("3","Dedak");



CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(250) NOT NULL,
  `alamat_karyawan` varchar(250) NOT NULL,
  `telepon_karyawan` varchar(14) NOT NULL,
  `jabatan_karyawan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=1226 DEFAULT CHARSET=latin1;

INSERT INTO tb_karyawan VALUES("1219","Ibu Maya","ciamis","0852312","kr");
INSERT INTO tb_karyawan VALUES("1221","Yunus","Ciamis","089628117119","kr");
INSERT INTO tb_karyawan VALUES("1222","Pak Ato","Ciamis","087827899990","kpg");
INSERT INTO tb_karyawan VALUES("1223","Hari","ciamis","087827786886","kr");
INSERT INTO tb_karyawan VALUES("1224","Ibu Ebah","Desa Karang Ampel, Kec. Baregbeg, Kab. Ciamis","087625311263","kr");
INSERT INTO tb_karyawan VALUES("1225","Ibu Ikah","Desa Karang Ampel, Kec. Baregbeg, Kab. Ciamis","087625112798","kr");



CREATE TABLE `tb_obat` (
  `id_obat` int(9) NOT NULL,
  `nama_obat` varchar(250) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_suplier` int(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_obat`),
  KEY `id_suplier` (`id_suplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_obat VALUES("136","Delatrin","20","123","1","2018-10-05","2018-10-31","Mencegah dan mengobati infestasi ektoparasit (kutu, tungau, caplak, lalat, dan kutu franky");
INSERT INTO tb_obat VALUES("137","Delatrin","16","125","1","2018-10-02","2018-10-13","Mencegah dan mengobati infestasi ektoparasit (kutu, tungau, caplak, lalat, dan kutu franky");
INSERT INTO tb_obat VALUES("138","ALBENOL-100 ORAL","100","123","4","2018-10-04","2018-10-31","                
                         Untuk Obat cacing                         ");
INSERT INTO tb_obat VALUES("139","ALBENOL-100 ORAL","30","125","4","2018-10-04","2018-10-19","        
                         Untuk obat cacing");
INSERT INTO tb_obat VALUES("140","INTERTRIM LA","100","123","5","2018-10-05","2018-10-31","Pengobatan Infectious Coryza /Snot, Fowl Cholera, Colibacillosis, Salmonellosis dan malaria unggas ");
INSERT INTO tb_obat VALUES("141","INTERTRIM LA","17","123","5","2018-10-05","2018-10-12","Pengobatan Infectious Coryza /Snot, Fowl Cholera, Colibacillosis, Salmonellosis dan malaria unggas ");
INSERT INTO tb_obat VALUES("142","Zaldes","27","123","2","2018-10-02","2018-10-31","        Desinfektan
                         ");
INSERT INTO tb_obat VALUES("143","Zaldes","140","125","2","2018-10-03","2019-01-31","        
                         Desikfektan");
INSERT INTO tb_obat VALUES("144","Paracetamol","20","125","6","2018-10-04","2018-11-01"," Untuk obat demam
                         ");
INSERT INTO tb_obat VALUES("145","Paracetamol","110","124","6","2018-10-13","2018-10-31","Untuk Obat demam");



CREATE TABLE `tb_pakan` (
  `id_pakan` int(9) NOT NULL,
  `nama_pakan` varchar(250) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_suplier` int(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  PRIMARY KEY (`id_pakan`),
  KEY `id_suplier` (`id_suplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_pakan VALUES("424","Jagung","0","123","1","2018-05-25","2018-11-30");
INSERT INTO tb_pakan VALUES("428","Dedak","112","123","3","2018-10-01","2018-10-31");
INSERT INTO tb_pakan VALUES("429","Jagung","101","123","1","2018-05-25","2018-11-29");
INSERT INTO tb_pakan VALUES("431","Jagung","20","123","1","2018-05-25","2018-11-28");
INSERT INTO tb_pakan VALUES("436","Bekatul","131","123","2","2018-10-05","2018-10-31");
INSERT INTO tb_pakan VALUES("437","Bekatul","0","122","2","2018-10-21","2018-10-30");
INSERT INTO tb_pakan VALUES("438","Jagung","22","124","1","2018-10-05","2018-10-28");



CREATE TABLE `tb_suplier` (
  `id_suplier` int(5) NOT NULL AUTO_INCREMENT,
  `nama_suplier` varchar(250) NOT NULL,
  `alamat_suplier` varchar(250) NOT NULL,
  `tlp_suplier` varchar(12) NOT NULL,
  PRIMARY KEY (`id_suplier`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

INSERT INTO tb_suplier VALUES("122","Bahtian","Ciamis","08523165479");



CREATE TABLE `tb_telur` (
  `id_telur` int(7) NOT NULL,
  `id_karyawan` int(7) NOT NULL,
  `jml_telur` int(10) NOT NULL,
  `berat` float NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_telur`),
  KEY `id_karyawan` (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_telur VALUES("1","1221","5652","6.2","2018-06-05");
INSERT INTO tb_telur VALUES("3","1223","34","4.3","2018-06-07");
INSERT INTO tb_telur VALUES("4","1221","39","4.1","2018-07-20");
INSERT INTO tb_telur VALUES("5","1224","100","3.8","2018-10-30");



CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_user VALUES("1","admin","21232f297a57a5a743894a0e4a801fc3","admin","admin");
INSERT INTO tb_user VALUES("3","desylo","b4a90dc3880bf0b78c5dfd359ff5fd67","Desylo Santicho","Admin");



CREATE TABLE `ts_obat` (
  `kode_obat` int(7) NOT NULL,
  `id_obat` int(9) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `jml_obat` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_obat`),
  KEY `id_obat` (`id_obat`),
  KEY `id_karyawan` (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO ts_obat VALUES("22","138","1222","12","2018-10-30","Untuk obat cacing");



CREATE TABLE `ts_pakan` (
  `kode_pakan` int(7) NOT NULL,
  `id_pakan` int(9) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `jml_pakan` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`kode_pakan`),
  KEY `id_pakan` (`id_pakan`),
  KEY `id_karyawan` (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO ts_pakan VALUES("135","424","1223","10","2018-06-26");
INSERT INTO ts_pakan VALUES("137","424","1221","13","2018-10-09");
INSERT INTO ts_pakan VALUES("138","436","1221","23","2018-10-06");
INSERT INTO ts_pakan VALUES("139","428","1223","12","2018-10-20");
INSERT INTO ts_pakan VALUES("140","424","1222","100","2018-10-20");
INSERT INTO ts_pakan VALUES("141","437","1224","100","2018-10-27");



CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_obat` AS select `tb_obat`.`id_obat` AS `id_obat`,`tb_obat`.`nama_obat` AS `nama_obat`,sum(case when `tb_obat`.`tgl_kadaluarsa` < curdate() then `tb_obat`.`stok` else 0 end) AS `kadaluarsa`,sum(case when `tb_obat`.`tgl_kadaluarsa` > curdate() then `tb_obat`.`stok` else 0 end) AS `tersedia`,`tb_obat`.`id_kategori` AS `id_kategori`,`tb_obat`.`deskripsi` AS `deskripsi` from `tb_obat` group by `tb_obat`.`nama_obat`;

INSERT INTO view_obat VALUES("138","ALBENOL-100 ORAL","130","0","4","                
                         Untuk Obat cacing                         ");
INSERT INTO view_obat VALUES("136","Delatrin","36","0","1","Mencegah dan mengobati infestasi ektoparasit (kutu, tungau, caplak, lalat, dan kutu franky");
INSERT INTO view_obat VALUES("140","INTERTRIM LA","117","0","5","Pengobatan Infectious Coryza /Snot, Fowl Cholera, Colibacillosis, Salmonellosis dan malaria unggas ");
INSERT INTO view_obat VALUES("144","Paracetamol","130","0","6"," Untuk obat demam
                         ");
INSERT INTO view_obat VALUES("142","Zaldes","167","0","2","        Desinfektan
                         ");



CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pakan` AS select `tb_pakan`.`id_pakan` AS `id_pakan`,`tb_pakan`.`nama_pakan` AS `nama_pakan`,sum(case when `tb_pakan`.`tgl_kadaluarsa` < curdate() then `tb_pakan`.`stok` else 0 end) AS `kadaluarsa`,sum(case when `tb_pakan`.`tgl_kadaluarsa` > curdate() then `tb_pakan`.`stok` else 0 end) AS `tersedia`,`tb_pakan`.`id_kategori` AS `id_kategori` from `tb_pakan` group by `tb_pakan`.`nama_pakan`;

INSERT INTO view_pakan VALUES("436","Bekatul","131","0","2");
INSERT INTO view_pakan VALUES("428","Dedak","112","0","3");
INSERT INTO view_pakan VALUES("424","Jagung","143","0","1");

