-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 08, 2021 lúc 01:13 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlythuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(2, 'admin@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Khai Bui', '0123456789', '2021-08-01 14:25:22', '2021-08-04 09:05:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ddc`
--

CREATE TABLE `ddc` (
  `ma_ddc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phan_loai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_01_140812_create_admin_table', 1),
(5, '2021_08_02_102720_create_table_sach', 1),
(6, '2021_08_05_015004_create_muon', 2),
(7, '2021_08_06_005120_create_ddc', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muon`
--

CREATE TABLE `muon` (
  `ma_muon` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_sach` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` int(10) NOT NULL,
  `ngay_muon` date NOT NULL,
  `ngay_hen_tra` date NOT NULL,
  `ngay_tra` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `muon`
--

INSERT INTO `muon` (`ma_muon`, `user_name`, `ten_sach`, `so_luong`, `ngay_muon`, `ngay_hen_tra`, `ngay_tra`, `created_at`, `updated_at`) VALUES
(1, 'Bùi Đức Khải', 'Án mạng trên sông Nile', 1, '2021-08-02', '2021-08-09', '2021-08-08', NULL, NULL),
(2, 'Bùi Đức Khải', 'Bồ câu không đưa thư', 1, '2021-08-02', '2021-08-11', '2021-08-11', NULL, NULL),
(3, 'Bùi Đức Khải', 'Cô gái đến từ hôm qua', 1, '2021-08-01', '2021-08-19', '2021-08-18', NULL, NULL),
(4, 'Lê An Bình', 'Con chó nhỏ mang giỏ hoa hồng', 1, '2021-08-24', '2021-08-28', '2021-08-28', NULL, NULL),
(5, 'Trần Long Hoàng', 'Doraemon', 2, '2021-07-20', '2021-07-29', '2021-07-28', NULL, NULL),
(6, 'Trần Long Hoàng', 'Doraemon Truyện Dài', 4, '2021-08-01', '2021-08-17', '2021-08-17', NULL, NULL),
(7, 'Lê An Bình', 'Bồ câu không đưa thư', 1, '2021-08-24', '2021-08-28', '2021-08-28', NULL, NULL);
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `ma_sach` int(10) UNSIGNED NOT NULL,
  `ten_sach` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_tac_gia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngon_ngu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dich_gia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `the_loai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_ddc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nxb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_thieu_sach` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia_tien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`ma_sach`, `ten_sach`, `ten_tac_gia`, `ngon_ngu`, `dich_gia`, `the_loai`, `ma_ddc`, `nxb`, `gioi_thieu_sach`, `so_luong`, `gia_tien`, `created_at`, `updated_at`) VALUES
(1002, 'Doraemon', 'Fujiko F. Fujio', 'Tiếng việt', 'Không', 'Truyện Tranh', '700 Nghệ thuật', 'Kim Đồng', 'Những câu chuyện về chú mèo máy thông minh Doraemon và nhóm bạn Nobita, Shizuka, Suneo, Jaian, Dekisugi sẽ đưa chúng ta bước vào thế giới hồn nhiên, trong sáng đầy ắp tiếng cười với một kho bảo bối kì diệu - những bảo bối biến ước mơ của chúng ta thành sự thật. Nhưng trên tất cả Doraemon là hiện thân của tình bạn cao đẹp, của niềm khát khao vươn tới những tầm cao.', 50, 16000, NULL, NULL),
(1003, 'Doraemon Truyện Dài', 'Fujiko F. Fujio', 'Tiếng việt', 'Không', 'Truyện Tranh', '700 Nghệ thuật', 'Kim Đồng', 'Những câu chuyện về chú mèo máy thông minh Doraemon và nhóm bạn Nobita, Shizuka, Suneo, Jaian, Dekisugi sẽ đưa chúng ta bước vào thế giới hồn nhiên, trong sáng đầy ắp tiếng cười với một kho bảo bối kì diệu - những bảo bối biến ước mơ của chúng ta thành sự thật. Nhưng trên tất cả Doraemon là hiện thân của tình bạn cao đẹp, của niềm khát khao vươn tới những tầm cao.', 24, 20000, NULL, NULL),
(1004, 'Conan', 'Gosho Aoyama', 'Tiếng việt', 'Không', 'Truyện Tranh', '100 Triết học và Tâm lý học', 'Kim Đồng', 'Nhân vật chính của truyện là một thám tử học sinh trung học có tên là Kudo Shinichi - thám tử học đường xuất sắc - một lần bị bọn tội phạm ép uống thuốc độc và bị teo nhỏ thành học sinh tiểu học lấy tên là Conan Edogawa và luôn cố gắng truy tìm tung tích tổ chức Áo Đen nhằm lấy lại hình dáng cũ.', 80, 15000, NULL, NULL),
(1005, 'Mắt Biếc', 'Nguyễn Nhật Ánh', 'Tiếng việt', 'Không', 'Truyện Ngôn Tình', '100 Triết học và Tâm lý học', 'Trẻ', 'Nội dung câu chuyện xoay quay tình cảm trong sáng của hai cô cậu học trò Ngạn và Hà Lan. Thế nhưng chính sự ngại ngùng và nhiều lý do khác khiến cho tình cảm của họ không có được kết thúc trọn vẹn.', 1, 50000, NULL, NULL),
(1006, 'Tôi thấy hoa vàng trên cỏ xanh', 'Nguyễn Nhật Ánh', 'Tiếng việt', 'Không', 'Truyện Ngôn Tình', '800 Văn học và Tu từ học', 'Trẻ', 'Cuốn sách này gồm 81 chương ngắn, trong đó nói về những câu chuyện nhỏ của những đứa trẻ trong một ngôi làng với rất nhiều điều thú vị và đơn giản, chẳng hạn như chuyện về con cóc, con ma, công chúa, hoàng tử về những tình huống chân thực về sự đói khổ, thiên tai đã xảy ra trong ngôi làng đó. Những câu chuyện này được tác giả truyền tải với giọng văn giản dị, hồn nhiên như chính những đứa trẻ trong tác phẩm này, đem đến cho người đọc sự nhẹ nhàng, sâu lắng nhưng không kém phần ám ảnh và kịch tính với những tình huống gây bất ngờ được gói gọn trong hơn 300 trang sách.', 1, 50000, NULL, NULL),
(1007, 'Cô gái đến từ hôm qua', 'Nguyễn Nhật Ánh', 'Tiếng việt', 'Không', 'Truyện Ngôn Tình', '700 Nghệ thuật', 'Trẻ', 'Nội dung tác phẩm kể về một mối tình tuổi học trò đầy hồn nhiên của hai nhân vật Anh Thư và Tiểu Li. Tuy nhiên vì hoàn cảnh gia đình, họ phải rời xa nhau nhưng không biết đến bao giờ gặp lại. Câu chuyện lại tiếp tục cho đến Anh Thư khi học cấp ba rồi cảm nắng một cô bạn cùng lớp tên là Việt An, từ đó những bất ngờ đã được hé lộ ra khiến cho những người trong cuộc đều không ngờ tới. Bất ngờ đó là gì, chắc chắn bạn cần phải tìm đọc ngay cuốn sách này để tìm câu trả lời cho bản thân mình.', 1, 50000, NULL, NULL),
(1008, 'Cho tôi một vé đi tuổi thơ', 'Nguyễn Nhật Ánh', 'Tiếng việt', 'Không', 'Truyện Ngôn Tình', '000 Những vấn đề chung', 'Trẻ', 'Trong tác phẩm này, người đọc sẽ được sống lại tuổi ấu thơ của mình với những trò chơi dân gian quen thuộc cùng với đó là những ước mơ hồn nhiên dễ thương của những đứa trẻ. Đan xen trong câu chuyện là những tình huống dở khóc dở cười của những nhân vật bé con, càng làm cho độc giả vừa hồi hộp nhưng vẫn tạo nên tiếng cười hóm hỉnh về những đứa trẻ này.', 1, 50000, NULL, NULL),
(1009, 'Con chó nhỏ mang giỏ hoa hồng', 'Nguyễn Nhật Ánh', 'Tiếng việt', 'Không', 'Truyện Ngôn Tình', '000 Những vấn đề chung', 'Trẻ', 'Trong những truyện hay nhất của nhà văn Nguyễn Nhật Ánh, chúng ta không thể bỏ qua cuốn sách mang tên Con chó nhỏ mang giỏ hoa hồng. Nội dung tác phẩm được chia thành 5 chương với 86 câu chuyện nhỏ xoay quanh về nói về cuộc sống của 5 chú chó có tên lần lượt là Haili, Batô, Suku, Êmê và Pig sống chung trong một ngôi nhà.', 1, 30000, NULL, NULL),
(1010, 'Bồ câu không đưa thư', 'Nguyễn Nhật Ánh', 'Tiếng việt', 'Không', 'Truyện Ngôn Tình', '000 Những vấn đề chung', 'Trẻ', 'Nội dung của tác phẩm nói về hành trình đi tìm chủ nhân của lá thư làm quen được giấu trong hộc bàn của ba nữ sinh có tên Thục, Xuyến và Cúc Hương.Với sự trợ giúp của anh bạn cùng lớp tên là Phán củi, bộ ba nữ sinh đã tạo ra nhiều tình huống rất hài hước và thú vị để truy tìm ra người bí ẩn đứng đằng sau lá thư đó. Tất nhiên cái kết chắc chắn sẽ gây bất ngờ cho người đọc, thế nhưng về tổng thể thì đây đúng nghĩa là một tác phẩm dành cho lứa tuổi học trò đầy vô tư và tinh nghịch, với những rung động đầu đời của tuổi mới lớn sẽ khiến độc giả như thấy được mình trong cuốn truyện này.', 1, 40000, NULL, NULL),
(1011, 'Tôi là Bêtô', 'Nguyễn Nhật Ánh', 'Tiếng việt', 'Không', 'Truyện Ngôn Tình', '000 Những vấn đề chung', 'Trẻ', 'Đây là một trong những tác phẩm hiếm hoi được Nguyễn Nhật Ánh viết về loài vật. Nội dung của cuốn sách nói về mối quan hệ thân thiết của hai chú cún con có tên là Bêtô và Laica. Xuyên suốt tác phẩm này sẽ là rất nhiều những hành trình khám phá rất thú vị về những chú chó này, được tác giả Nguyễn Nhật Ánh tạo dựng và trình bày rất độc đáo và sáng tạo với phương pháp nhân hoá.', 1, 25000, NULL, NULL),
(1012, 'Sherlock Homles', 'Arthur Conan Doyle', 'Tiếng Anh', 'Không', 'Truyện Tranh', '100 Triết học và Tâm lý học', 'Kim Đồng', 'Đây là một series câu chuyện phá án của thám tử tài ba Sherlock Holmes với khả năng suy luận logic, khám phá các vụ án một cách chính xác và hợp lí đến không ngờ. Đồng hành cùng Sherlock Holmes trong cac vụ án còn có người bạn thân thiết kiêm cộng sự đắc lực là bác sĩ Waston. Cả hai đã khám phá ra những vụ án cực kỳ nghiêm trọng và đặc biệt khó khăn. Chính bởi những tài năng thiên bẩm đó Sherlock Holmes đã để lại dấu ấn khó phai trong lòng độc giả là hình ảnh của vị thám tử tài năng, có tấm lòng nhân hậu và luôn bảo vệ chính nghĩa', 5, 60000, NULL, NULL),
(1013, 'Mật mã Davinci', 'Dan Brown', 'Tiếng Anh', 'Không', 'Truyện Trinh Thám', '000 Những vấn đề chung', 'Thanh niên', 'Mật mã Davinci” là câu chuyện nói về hành trình của giáo sư trường đại học Harvard Robert Langdon và chuyên gia giải mật mã Sophie Neuveu trong hành trình đi tìm bí ẩn đằng sau cái chết của Jacques Saunière- ông của Sophie. Dan Brown sẽ dẫn dắt chúng ta khám phá từ bất ngờ này đến bất ngờ khác qua các biến chuyển của mạch truyện.', 1, 90000, NULL, NULL),
(1014, 'Hỏa ngục', 'Dan Brown', 'Tiếng Anh', 'Không', 'Truyện Trinh Thám', '000 Những vấn đề chung', 'Thanh niên', 'Tiếp tục một tác phẩm tiểu thuyết trinh thám của nhà Dan Brown bán chạy nhất trên danh sách New York Times Best Seller đó là “ Hỏa Ngục”. Cuốn tiểu thuyết đã thực sự tạo dấu ấn sâu sắc bởi những suy nghĩ, vấn đề gợi ra từ tác phẩm: hiện trạng bùng nổ dân số trên thế giới. Song song đó, “ Hỏa Ngục” còn khẳng định được giá trị của mình bằng giọng văn lôi cuốn cũng như tình tiết truyện độc đáo.', 1, 60000, NULL, NULL),
(1015, 'Án mạng trên sông Nile', 'Agatha Christie', 'Tiếng việt', 'Không', 'Truyện Trinh Thám', '300 Khoa học Xã hội', 'Lao Động', 'Nhà văn Agatha Christie với lối kể chuyện ly kì đầy hấp dẫn, hồi hộp, tác phẩm “Án mạng trên dòng sông Nile” khiến cho độc giả đi từ bất ngờ này đến bất ngờ khác. “Án mạng trên sông Nile” thực sự đã để lại cho người đọc những ấn tượng sâu sắc nhờ trí tuệ và khả năng phân tích phác họa hành động của hung thủ của Hercule Poirot, vị thám tử lừng danh người Bỉ đang có chuyến du lịch nghỉ ngơi tại Ai Cập. Bên cạnh đó, những phân cảnh buộc tội, vạch trần hung thủ cũng khiến không ít người đọc phải hồi hộp thót tim trước chân dung hung thủ độc ác, ra tay gọn gàng. Và một cái kết thực sự bất ngờ luôn là điểm nhấn ghi lại những dấu ấn tuyệt vời trong lòng độc giả. Đây thực sự là một cuốn tiểu thuyết trinh thám đắt khách nhất sau khi ra mắt.', 1, 50000, NULL, NULL),
(1016, 'Đề thi đẫm máu', 'Lôi Mễ', 'Tiếng Trung', 'Không', 'Truyện Trinh Thám', '000 Những vấn đề chung', 'Thanh niên', 'Nội dung cuốn tiểu thuyết nói về nhân vật chính là một chàng trai vô cùng thông minh có tên là  Phương Mộc.  Anh chàng này có khả năng thiên bẩm là khắc họa chân dung tội phạm rất chính xác nên giúp đỡ cảnh sát nhiều trong việc phá án những vụ án giết người nguy hiểm. Rồi có những sự việc gì xảy ra tiếp theo, tại sao thầy giáo Tôn, người đã ra đề thi đẫm máu và nước mắt cho anh và những người thân bên cạnh anh lần lượt ra đi. Hãy theo dõi cuốn sách để tìm hiểu sự thật đằng sau những cái chết bí hiểm đó nhé.', 1, 70000, NULL, NULL),
(1017, 'Pinocchio', 'Daniel Howarth và Arianna Candell', 'Tiếng Việt', 'Trần Ngọc Diệp', 'Truyện Cổ Tích', '300 Khoa học Xã hội', 'Kim Đồng', 'Nhà xuất bản Kim Đồng giới thiệu đến bạn đọc nhỏ tuổi bộ sách Truyện cổ tích nổi tiếng (ảnh) gồm các câu chuyện cổ tích hay nhất thế giới được kể bằng hai ngôn ngữ tiếng Việt và tiếng Anh.', 2, 30000, NULL, NULL),
(1018, 'Tuyển tập truyện cổ Grimm', 'Jacob Grimm và Wilhelm Grimm', 'Tiếng việt', 'Trần Đương', 'Truyện Cổ Tích', '000 Những vấn đề chung', 'Kim Đồng', 'Các em thiếu nhi luôn dành tình cảm đặc biệt cho thế giới cổ tích rộng lớn, kì ảo – nơi có các chàng hoàng tử quả cảm và những nàng công chúa đẹp xinh, có các bà tiên nhân hậu nhưng cũng có những mụ phù thủy độc ác, những con quỷ đáng sợ Ở đó, như các em luôn mong, luôn tin, luôn hi vọng, cái Thiện sẽ chiến thắng cái Ác, những người hiền lành, ngay thẳng sẽ được hưởng hạnh phúc, còn kẻ ác phải chịu trừng phạt.', 1, 75000, NULL, NULL),
(1019, 'Cô bé Lọ Lem', 'Peter Holeinone, Tony Wolf', 'Tiếng việt', 'Phùng Phương Thảo', 'Truyện Cổ Tích', '300 Khoa học Xã hội', 'Kim Đồng', 'Bộ sách “Cổ tích vàng” tập hợp những câu chuyện cổ tích kinh điển nổi tiếng thế giới được nhiều thế hệ độc giả yêu thích và thuộc “nằm lòng” như: Nàng Bạch Tuyết và bảy chú lùn, Người đẹp và quái vật, Ông lão đánh cá và con cá vàng, Nàng tiên cá, Cô bé Lọ Lem.\r\nSách gồm 4 chủ đề “Những câu chuyện thông thái”, “Những câu chuyện yêu thương”, “Những câu chuyện nhân ái”, “Những câu chuyện phiêu lưu” giúp các em giàu thêm ước mơ, hiểu về lòng nhân ái và phát triển trí thông minh.', 4, 120000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_name`, `user_phone`, `user_address`, `created_at`, `updated_at`) VALUES
(1, 'buiduckhai@email.com', '123456', 'Bùi Đức Khải', '0123456789', 'Hanoi', NULL, NULL),
(2, 'leanbinh@email.com', '123456', 'Lê An Bình', '0123456789', 'Hanoi', NULL, NULL),
(3, 'tranlonghoang@email.com', '123456', 'Trần Long Hoàng', '0123456789', 'Hanoi', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `ddc`
--
ALTER TABLE `ddc`
  ADD PRIMARY KEY (`ma_ddc`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `muon`
--
ALTER TABLE `muon`
  ADD PRIMARY KEY (`ma_muon`),
  ADD KEY `user_id` (`user_name`),
  ADD KEY `ma_sach` (`ten_sach`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`ma_sach`),
  ADD KEY `ma_ddc` (`ma_ddc`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `muon`
--
ALTER TABLE `muon`
  MODIFY `ma_muon` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `ma_sach` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1020;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
