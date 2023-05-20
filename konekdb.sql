--
-- Database: 'konekdb'
--

-- ------------------------------

--
-- Table structure for table 'user'
--

CREATE Table IF NOT exists 'user'(
    'id' int(11) not null AUTO_INCREMENT,
    'nama' varchar(50)not null,
    'alamat' text not null,
    'pekerjaan' varchar(50) not null,
    primary key ('id')
) engine=InnoDB DEFAULT charset=Latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table 'user'
--

insert into 'user' ('id', 'nama', 'alamat', 'pekerjaan') VALUES
(1, 'Andi', 'Surabaya', 'web programmer'),
(2, 'Santoso', 'Jakarta', 'Web Designer'),
(6, 'Samsul', 'Sumedang', 'Pegawai');