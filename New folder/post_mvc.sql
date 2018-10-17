-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2018 lúc 11:56 AM
-- Phiên bản máy phục vụ: 10.1.22-MariaDB
-- Phiên bản PHP: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `post_mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`id`, `name`, `thumbnail`, `address`, `age`, `phone`, `status`) VALUES
(2, 'Nguyễn Như Khánh', 'images (6).jpg', 'Vĩnh Thủy -Vĩnh Linh - Quảng Trị', 18, 1688434788, 1),
(5, 'Đoàn Thị Xuân Hiếu', 'images (1).jpg', 'triệu phong - Quảng TRị', 25, 1658148257, 2),
(6, 'thành công 1', 'Roronoa-Zoro-4.jpg', 'vĩnh linh quảng trị', 25, 987654321, 1),
(7, 'e', 'f448606e61d833855b53eed0ae6c4180.jpg', 'quảng trị', 12, 987654321, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fashion_post`
--

CREATE TABLE `fashion_post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `star_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `authors_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `fashion_post`
--

INSERT INTO `fashion_post` (`id`, `title`, `introduction`, `description`, `thumbnail`, `star_date`, `status`, `views`, `authors_id`) VALUES
(1, 'Beckham và 8 ngôi sao không đá bóng cũng trở thành biểu tượng thời trang, ăn mặc phong cách nhất', 'Rất nhiều danh thủ thế giới khi cởi bỏ quần đùi áo số và khoác lên trang phục ngày thường đều được cộng đồng thời trang đánh giá cao.', 'David Beckham từ lâu đã được xem như một biểu tượng thời trang. Beckham không chỉ thu hút bên vẻ ngoài nam tính, lịch lãm, gu ăn mặc của anh cũng là niềm cảm hứng và có sức ảnh hưởng lớn đến người hâm mộ. Beckham luôn biến hóa trong cách ăn mặc.', 'degea.jpg', '2018-10-10', 1, 345, 2),
(2, 'Andrea Pirlo, với mái tóc lãng tử và bộ râu thương hiệu cũng sở hữu phong cách thời trang độc đáo', 'Trong hoạt động thường nhật, danh thủ Italy trung thành với quần jeans và áo phông. Nhưng khi phải di chuyển khi thi đấu, anh luôn lựa chọn các bộ suit thời trang.', 'Jamie Redknapp là cựu cầu thủ tuyển Anh và Liverpool. Những năm 90, anh cùng 4 cầu thủ Liverpool khác được mệnh danh là \"Spice Boys\", cho tương xứng với nhóm \"Spice Girls\" đình đám lúc bấy giờ. Redknapp cùng các đồng đội khi đó rất được fan ưa chuộng vì phong cách thời trang và gương mặt ưa nhìn.', 'ibra.jpg', '2018-10-12', 1, 34, 5),
(3, 'Thời trang của 10 siêu sao sân cỏ xưa và nay', 'Trang Sportskeeda vừa điểm lại phong cách thời trang của những siêu sao bóng đá thế giới, trong đó Cristiano Ronaldo được đánh giá lột xác ngoạn mục nhất.', 'Hồi mới gia nhập Atletico, Aguero là mẫu cầu thủ Argentina điển hình với mái tóc dài che tai. Tuy nhiên, sau khi chuyển sang Man City, El Kun quyết định rũ bỏ phong cách cổ điển. Mái tóc của anh luôn gọn gàng và bóng mượt.', 'ibra.jpg', '2018-10-17', 1, 56, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `other_news`
--

CREATE TABLE `other_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `star_date` date NOT NULL,
  `status` int(1) NOT NULL,
  `views` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `other_news`
--

INSERT INTO `other_news` (`id`, `title`, `introduction`, `description`, `thumbnail`, `star_date`, `status`, `views`, `author_id`) VALUES
(1, '\"Gareth Bale\" Việt Nam được trang chủ AFF Cup ca ngợi công thủ toàn diện', 'Mới đây, trang chủ AFF Cup 2018 đã bầu chọn 5 sao trẻ được kì vọng sẽ tỏa sáng ở bảng A. Đại diện Việt Nam - Đoàn Văn Hậu đứng ở vị trí đầu tiên. ', 'Anh cũng xuất hiện tại các cấp độ U18, U19, U20, U21, U23 lẫn ĐTQG Việt Nam. Thậm chí có thời điểm, sự kiện Văn Hậu - vốn là tuyển thủ ĐTQG - trở về khoác áo U19 trở thành đề tài \"nóng\" trên các mặt báo thể thao. Những thành tựu đó đều được chàng cầu thủ gốc Thái Bình hoàn thành khi mới bước sang tuổi 19.\r\n\r\n\"Cùng với đồng đội trong màu áo CLB Hà Nội - Nguyễn Quang hải, Đoàn Văn Hậu là đại diện tiêu biểu cho làn sóng tài năng trẻ được đặt nhiều kì vọng của bóng đá Việt Nam. Cậu ấy cũng sớm trở thành tuyển thủ quốc gia dù tuổi đời còn rất trẻ\", trích đoạn giới thiệu về Văn Hậu trên trang chủ AFF Cup.', 'ibra.jpg', '2018-10-08', 1, 244, 2),
(2, 'MU - Mourinho miệt mài đi tìm bản sắc: Thua cả... nhà vô địch V-League', 'Chelsea sẽ gặp MU vào ngày 20/10 tới và lúc này \"The Blues\" đã có một bản sắc rõ ràng chỉ sau 2 tháng HLV Sarri dẫn dắt, khác hẳn tình hình ở MU của Mourinho.', 'Chelsea chuyển mình mau lẹ\r\n\r\nChỉ trích riêng Jose Mourinho thì dư luận quốc tế đã làm quá nhiều khi nói về thành tích thi đấu gần đây của MU. Sự vô định hướng của “Quỷ Đỏ” không chỉ nằm mỗi trên vai của HLV người Bồ Đào Nha mà còn của cả một hệ thống, một mình Mourinho chưa chắc đã giải quyết nổi.', 'ibra.jpg', '2018-10-18', 1, 144, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `star_date` date NOT NULL,
  `status` int(1) NOT NULL,
  `author_id` int(11) NOT NULL,
  `type_news_id` int(11) DEFAULT NULL,
  `type_id` int(2) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `url_video` varchar(300) DEFAULT NULL,
  `slug` varchar(350) DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `introduction`, `description`, `thumbnail`, `star_date`, `status`, `author_id`, `type_news_id`, `type_id`, `views`, `url_video`, `slug`, `update_date`) VALUES
(1, 'Vai trò của \'số 10\' tuyệt chủng như thế nào?', 'Năm ngoái, HLV Joachim Loew của đội tuyển Đức còn ca ngợi Mesut Oezil là “một trong những số 10 hay nhất thế giới”. Bây giờ, khi được hỏi phải tìm đâu ra cầu thủ “số 10” để thay thế Oezil, Loew lại trả lời ngược hẳn: “Vai trò ấy đâu còn tồn tại nữa”!', 'Bóng đá không còn “vai trò số 10”\r\nChẳng phải Loew “nói lời rồi lại nuốt lời”. Đến tận World Cup 2018, Loew vẫn còn sử dụng Oezil trong vai trò “số 10 cổ điển”. Nhưng đấy là kỳ World Cup tồi tệ nhất trong lịch sử đội tuyển Đức. Có thể bản thân Loew đã nhận ra sai lầm “chết người” của mình để rồi bây giờ ông sẽ luôn nhấn mạnh về sự tuyệt chủng của cầu thủ “số 10” trong bóng đá hiện đại, mỗi khi được hỏi. Loew nói: “Bóng đá bây giờ không còn cầu thủ kiểu Guenter Netzer, Michel Platini hoặc Zinedine Zidane nữa”.\r\n\r\nVề mặt chiến thuật, hễ chơi theo sơ đồ 4-3-3 hoặc 3-4-3 thì không có cầu thủ “số 10” trong đội hình. Về mặt vai trò, cầu thủ tổ chức lối chơi, mà người ta hay gọi là “nhạc trưởng”, bây giờ phải đứng thấp hơn rất nhiều so với vị trí “số 10”.', 'rn1.jpg', '2018-08-31', 1, 2, 37, 1, 23, NULL, NULL, NULL),
(2, 'Luke Shaw - từ cậu bé đến chiến binh thép xứ sương mù', 'Nổi lên như một tài năng triển vọng rồi rớt xuống vực sâu với chấn thương kinh khủng, Luke Shaw đã nếm trải tất cả. Cuối cùng, không gì đánh gục được ý chí cầu thủ này.', '\"Cảm ơn tình yêu từ tất cả mọi người. Tôi là một chiến binh và sẽ trở lại sớm\", dòng trạng thái đăng trên trang cá nhân của Luke Shaw khiến nhiều cổ động viên bóng đá ấm lòng.\r\n\r\nHậu vệ cánh trái người Anh có lý do để tự nhận mình là một chiến binh. Từ một tài năng trẻ triển vọng của nước Anh, Luke Shaw đã trở thành “chiến binh thép”, với hành trình trải qua những bi kịch khủng khiếp tuổi đôi mươi để trở lại đầy mạnh mẽ.', 'shaw2.jpg', '2018-08-08', 1, 5, 37, 1, 43, NULL, NULL, NULL),
(4, 'M.U theo đuổi nhà vô địch World Cup trong tháng Giêng', 'HLV Jose Mourinho vẫn muốn tăng cường sự lựa chọn ở hàng thủ và mục tiêu mà ông nhắm đến cho M.U là Lucas Hernandez - nhà vô địch World Cup 2018.', 'Sau 4 trận đầu tại Ngoại hạng Anh 2018/19, M.U đã để lọt lưới tới 7 bàn. Điều đó cho thấy hệ thống phòng ngự của Quỷ đỏ có vấn đề. Trong kỳ chuyển nhượng Hè 2018, Mourinho đã yêu cầu BLĐ M.U mua thêm hậu vệ nhưng bất thành. Do đó, chiến lược gia người Bồ Đào Nha không có đủ nhân sự chất lượng để tạo ra rào chắn vững chãi phía trước khung thành của David de Gea.\r\n\r\nĐể \"đền bù\" cho Mourinho, cũng như giúp đội bóng có được kết quả tốt vào cuối mùa, M.U đang tính mang về Lucas Hernandez trong kỳ chuyển nhượng Đông tới. Lucas có thể chơi tốt ở vị trí trung vệ lẫn hậu vệ trái. Sự đa năng của nhà vô địch World Cup 2018 là điều hấp dẫn Mourinho.\r\n\r\nTheo tờ France Football của Pháp thì M.U đã sẵn sàng gửi lời đề nghị chiêu mộ Lucas tới Atletico Madrid. Hợp đồng của hậu vệ này có điều khoản giải phóng là 72 triệu bảng và chỉ cần chi ra số tiền này, Quỷ đỏ sẽ có sự phục vụ của cầu thủ người Pháp.\r\n\r\nReal Madrid là một đội bóng khác theo đuổi Lucas. Thế nhưng, Atletico sẽ muốn bán hậu vệ 22 tuổi cho M.U thay vì tăng sức mạnh cho đại kình địch cùng thành phố.\r\n', 'ibra.jpg', '2018-08-28', 2, 2, 8, 2, 54, NULL, NULL, NULL),
(6, 'M.U có thể đổi Pogba lấy Dybala của Juventus', 'Theo Calciomercato, M.U cân nhắc đàm phán với Juventus để đổi Paul Pogba lấy Paulo Dybala trong kỳ chuyển nhượng tháng 1/2019.', 'Sau trận Pháp hòa Đức 0-0 tại Allianz Arena hôm 7/9 (UEFA Nations League), tiền vệ Paul Pogba đã chia sẻ trên mạng Twitter như sau: \"Tương lai của tôi lúc này nằm ở M.U bởi tôi vẫn còn hợp đồng với đội bóng. Như vậy cũng có nghĩa trước mắt tôi vẫn đá cho M.U, nhưng sau vài tháng nữa thì chẳng ai có thể nói trước được điều gì\".\r\n\r\nVới việc Pogba đang thấp thỏm tương lai, BLĐ M.U đã lên kế hoạch thay anh ngay khi TTCN mở cửa vào tháng 1 tới. Theo đó, M.U sẵn sàng để cho Pogba quay lại với Juventus miễn là phía đối tác đồng ý nhả chân sút Paulo Dybala. \r\n\r\nHLV Jose Mourinho đã mến mộ tài năng của Dybala từ lâu nên ông rất muốn có chữ ký của cầu thủ người Argentina. Hiện tại, Dybala không hạnh phúc ở Juventus vì HLV Massimiliano Allegri đã thay đổi sơ đồ chiến thuật để phát huy tối đa khả năng của tân binh trị giá 112 triệu euro Cristiano Ronaldo.\r\n\r\nHai cầu thủ chạy cánh ưa thích của Allegri trong sơ đồ 3 tiền đạo là Mario Mandzukic và Federico Bernardeschi. Do đó, Dybala không được chiến lược gia người Italia trọng dụng thường xuyên. Tính ra, Dybala mới được đá chính 1 trận và có tổng cộng 100 phút ra sân sau 3 vòng đấu ở Serie A 2018/19.', 'r2.jpg', '2018-09-13', 1, 5, 8, 2, 23, NULL, NULL, NULL),
(7, 'Vì sao Mourinho sốt ruột về Luke Shaw?', 'Chấn thương trong trận giao hữu với Tây Ban Nha hôm 9/9 khiến Luke Shaw lỡ mất 2 trận đấu sắp tới của Man United. Chắc hẳn, hậu vệ 23 tuổi người Anh đang rất sốt ruột mong sớm trở lại thi đấu. Nhưng có người còn mong mỏi điều đó hơn cả anh. Đó là HLV Jose', 'r', 'mou.jpg', '2018-09-18', 1, 2, 9, 1, 43, NULL, NULL, NULL),
(8, 'CĐV sốc với pha chọc mắt của Vertonghen với Firmino', 'Vừa ghi bàn nâng tỷ số lên 2-0 cho Liverpool, Roberto Firmino đã phải rời sân sau khi bị trung vệ Jan Vertonghen chọc thẳng tay vào mắt.', 'Chấp luôn đôi mắt, Firmino vẫn có thể ghi bàn\". Tiền đạo số 9 của \"The Kop\" vẫn nổi tiếng với pha \"no look goal, tạm dịch: không cần nhìn vẫn ghi bàn\".  Anh thường sử dụng kỹ năng này khi trước mặt là cơ hội ngon ăn không thể bỏ lỡ.', 'r2.jpg', '2018-09-22', 1, 2, 8, 2, 45, NULL, NULL, NULL),
(9, 'Mourinho: \'Chỉ có 1 thứ để chê, đó là mái tóc của Smalling\'', 'Huấn luyện viên người Bồ Đào Nha hài lòng với màn trình diễn của học trò trong chiến thắng 2-1 trên sân Vicarage Road.', 'Phát biểu sau trận thắng nhọc nhằn trước \"hiện tượng\" Watford trong khuôn khổ vòng 5 Premier League, HLV Jose Mourinho tỏ ra vô cùng thoải mái: \"Smalling đã chơi tốt. Điều duy nhất tôi không thích vào lúc này là mái tóc của cậu ấy\".\r\n\r\n\"Lindelof cũng đã có màn trình diễn tốt. Và tôi xin nhắc lại, Fellaini quan trọng với Man Utd lúc này, nhất là trong 2 trận đấu vừa qua trước Burnley và Watford. Đó là những đội bóng chơi với 2 tiền đạo đầy sức mạnh\", vị thuyền trưởng của MU nói thêm.', 'r2.jpg', '2018-09-19', 1, 6, 8, 2, 45, NULL, NULL, NULL),
(10, 'Đối thủ ca ngợi De Gea là Messi trong khung gỗ', 'Màn trình diễn thượng hạng của David De Gea khiến ngay cả đối thủ Ben Foster cũng phải ngả mũ thán phục và ngợi ca bằng những ngôn từ hào nhoáng nhất.', 'Ngay đến người đồng nghiệp bên phía Watford là Ben Foster cũng phải ca tụng: \"De Gea là thủ môn tự nhiên nhất mà bạn từng được chứng kiến. Anh ấy là Messi trong giới thủ môn. Lúc nào De Gea cũng chơi hay như thế, giống như thể anh ấy chẳng bao giờ bị tác động. Thật tuyệt khi có thể tung ra những pha cứu thua như vậy, sau đó đứng dậy như thể chỉ muốn về nhà. De Gea quá xuất sắc\".\r\n\r\n\"Một thủ môn hàng đầu, không có gì phải bàn cãi. Nếu những chàng trai trẻ muốn trở thành một thủ môn giỏi, hãy quan sát De Gea. Anh ấy đạt tầm đẳng cấp thế giới\".\r\n\r\nĐồng đội Chris Smalling thì đã quá quen với màn thể hiện phía sau lưng mình: \"Điều khiến De Gea trở thành một trong những thủ môn hàng đầu thế giới là anh ấy không có nhiều việc để làm, trước khi đứng dậy thể hiện vào phút cuối\".\r\n\r\n\"Đó là những khoảnh khắc quan trọng. Một thủ môn hàng đầu không bao giờ mất tập trung và chúng ta đều biết rằng De Gea thì luôn ở đây\", Smalling tự hào nói về người gác đền 27 tuổi.', 'degea.jpg', '2018-09-11', 1, 2, 8, 1, 53, NULL, NULL, NULL),
(11, 'Một lần nữa, Quỷ đỏ biết ơn De Gea', 'Việc De Gea đóng vai người hùng cứu rỗi M.U không có gì mới. Nhiều năm qua, thủ môn người Tây Ban Nha luôn là lời giải thích cho câu hỏi tại sao Quỷ đỏ lại không thua, thậm chí giành chiến thắng dù không xứng đáng. Mới nhất, anh lại tỏa sáng giúp đội nhà', 'Cho đến nay, vụ chuyển nhượng David De Gea tới Real Madrid vào năm 2015 tại sao thất bại vẫn còn là bí mật. M.U nói rằng máy fax bên phía Tây Ban Nha có vấn đề, trong khi Real cáo buộc đội bóng Manchester cố tình nộp hồ sơ trễ. \r\n\r\nNhưng bây giờ, sau 3 năm, nó không còn quan trọng nữa. Vì bất kỳ lý do gì, các CĐV Quỷ đỏ sẽ luôn biết ơn, bởi thủ môn 27 tuổi vẫn đứng trong khung gỗ, và cứu M.U khỏi các thất bại. Anh gieo vào các đồng đội niềm tin mạnh mẽ, rằng họ sẽ không bị thủng lưới. Như Ander Herrera từng kể lại, mỗi khi anh và các đồng đội tỏ ra lo lắng, De Gea sẽ lập tức trấn an: “Này, thoải mái đi, kể cả khi các cậu để bọn họ lọt qua, khung thành vẫn an toàn tuyệt đối vì tớ ở đó”.\r\n\r\nĐêm thứ Bảy tại sân Vicarage Road của Watford, De Gea một lần nữa chứng minh anh không nói dối. Ngay phút 16, hàng thủ chệch choạc của M.U mang đến cơ hội để Troy Deeney tung ra cú dứt điểm cực mạnh. Người hâm mộ Watford đã đứng cả dậy để chực ăn mừng, song De Gea đã khiến họ tẽn tò. Anh bay người và cánh tay phải vươn cao, hất quả bóng vọt qua xà ngang. ', 'degea.jpg', '2018-09-06', 1, 2, 8, 2, 535, NULL, NULL, NULL),
(12, 'Fellaini, \'phát minh\' vĩ đại nhất của Mourinho?', 'Không có cầu thủ ấy trên sân, Man United cùng lắm cũng chỉ kiếm được một trận hòa trước Watford. Cầu thủ ấy là ai? 99% những người xem bóng đá bình thường sẽ điền tên thủ môn David de Gea. ', 'Từ trận đấu với Watford mà suy ra, thì Fellaini, chứ không phải Pogba hay Lukaku, mới đang là cầu thủ quan trọng nhất của M.U. Anh đang phải một mình xử lý tất cả những vấn đề của đội bóng. Từ vấn đề của cặp trung vệ. Vấn đề triển khai bóng từ tuyến dưới. Vấn đề đánh chặn từ xa. Và thậm chí cả vấn đề liên quan tới hiệu quả của hàng công. Fellaini trong tay Mourinho đã trở thành Fellenbauer - một kiểu Beckenbauer mới!\r\n\r\nĐể giải thích khái niệm “tiền vệ box to box” (con thoi) mà không lấy màn trình diễn của Fellaini trong trận đấu với Watford ra làm ví dụ minh họa thì thật là một thiếu sót lớn. Nếu HLV Mourinho liệt kê ra nhiệm vụ của từng người trong trận, thì phần của Fellaini chắc chắn là dài nhất và phức tạp nhất. Anh chơi âm thầm nhưng luôn phải biết lúc nào có mặt trong vòng cấm để hỗ trợ cặp trung vệ. Lúc nào phải lùi về bên cạnh cặp trung vệ ấy để triển khai bóng hoặc để tạo thành một bức tường chống phản công. Lúc nào thì dâng lên gây sức ép với đối phương ở hàng tiền vệ. Và lúc nào thì có mặt trong vòng cấm của đối phương để đón các quả treo bóng chéo sân.', 'r2.jpg', '2018-09-06', 1, 2, 8, 1, 343, NULL, NULL, NULL),
(13, 'Dembele, \'kẻ tế thần\' ở Barca', 'Mua Ousmane Dembele từ Dortmund với cái giá cao ngất ngưởng (105 triệu euro) ở kỳ chuyển nhượng Hè năm ngoái, song Barca lại đang phí phạm tài năng người Pháp này bởi cách sử dụng người rất kỳ lạ của HLV Ernesto Valverde.', 'Vâng, rất nhiều CĐV Barca đã thắc mắc cách dùng Dembele của HLV Valverde ở mùa giải năm nay. Cụ thể, ngoại trừ trận đấu duy nhất được đá trọn vẹn 90 phút trước Huesca ra thì có đến 6/7 trận chính thức mùa này Dembele bị thay ra và thậm chí là số phút được hiện diện trên sân của Dembele ngày càng ít dần.\r\n\r\nCó thể dễ dàng nhận thấy điều đó tính từ trận chính thức đầu tiên của Barca ở mùa giải năm nay (gặp Sevilla ở Siêu Cúp Tây Ban Nha). Dembele được thi đấu 85 phút rồi 77 phút trận Barcelona - Alaves, 75 phút trận Valladolid - Barcelona, 76 phút trận Sociedad - Barcelona, 83 phút trận Barcelona - PSV và chỉ 45 phút trong trận Barcelona hòa Girona 2-2 vào cuối tuần qua, dẫu cầu thủ chạy cánh 21 tuổi người Pháp này vẫn là một trong những gương mặt chơi hay nhất của Barca.', 'rnă.jpg', '2018-09-04', 1, 2, 36, NULL, 234, NULL, NULL, NULL),
(14, '\'Messi đang ở trong nhà tù bằng vàng\'', 'Trở thành cầu thủ vĩ đại như Lionel Messi là điều mà bất kỳ người nào cũng mong muốn, ngoại trừ cựu tiền đạo Dani Osvaldo người Italia. Theo Osvaldo thì Messi giống như đang... ở tù.', 'Osvaldo là cựu tiền đạo người Italia gốc Argentina. Trong sự nghiệp, anh đã trải qua các CLB lớn ở Italia như Fiorentina, Roma, Juve hay Inter Milan. Osvaldo cũng từng tới Anh chơi bóng cho Southampton. Vào năm 2016, cựu tuyển thủ Italia đã nói lời giải nghệ dù lúc đó anh mới 30 tuổi.\r\n\r\nSau khi giã từ sự nghiệp quần đùi áo số, Osvaldo đã theo đuổi sự nghiệp nhạc rock. Mới đây, anh đã chia sẻ về lý do giải nghệ sớm khi cho rằng \"thế giới bóng đá không còn dành cho tôi\". Ngoài ra, Osvaldo cũng bình luận vềLionel Messi, siêu sao đương đại của thế giới bóng đá.\r\n\r\nOsvaldo nói: \"Tôi có muốn giống như Messi không? Không. Tôi muốn chơi bóng như Messi, nhưng anh ấy không có cuộc sống. Messi cứ như thể đang sống trong một nhà tù bằng vàng. Messi không thể đi đâu và lặng lẽ uống gì đó. Có lẽ Messi không quan tâm về khía cạnh đó nhưng tôi thì có\".', 'r2.jpg', '2018-09-20', 1, 2, 36, NULL, 435, NULL, NULL, NULL),
(15, 'Isco ngồi ngoài 1 tháng vì mổ ruột thừa', 'Tiền vệ Isco của Real Madrid đã bị đau ruột thừa và sẽ phải phẫu thuật. Theo dự kiến, cầu thủ người Tây Ban Nha sẽ ngồi ngoài 1 tháng.', 'Ở buổi tập mới nhất của Real, Isco đã đến sân với một cơn đau dữ dội. Anh nói với các HLV và nhân viên y tế rằng sẽ không thể luyện tập. Sau đó, các bác sĩ đã đưa Isco đưa xét nghiệm và tiền vệ người Tây Ban Nha bị chẩn đoán viêm ruột thừa. Isco sẽ phải trải qua ca phẫu thuật cắt bỏ nó.\r\n\r\nCầu thủ 26 tuổi sẽ phải nghỉ ngơi hoàn toàn trong vòng 1 tuần sau ca mổ. Anh sẽ không thể tập luyện cho đến tuần thứ 3. Do đó, Isco sẽ phải nỗ lực bình phục nếu muốn tham dự trận Siêu kinh điển đầu tiên của mùa giải diễn ra vào ngày 28/10.\r\n\r\nTrong buổi tập hôm nay, các cầu thủ Real đã chụp hình kỷ niệm với người chiến thắng giải FIFA The Best 2018 Luka Modric. Các ngôi sao khác của Real lọt vào Đội hình tiêu biểu năm của FIFA như Sergio Ramos, Raphael Varane và Marcelo cũng khoe giải thưởng giành được.\r\n\r\nVào rạng sáng ngày thứ Năm tới, Real sẽ có chuyến làm khách trên sân của Sevilal trong khuôn khổ La Liga. Ngoại trừ Isco, Real nhiều khả năng sẽ không có sự phục vụ của hậu vệ phải Dani Carvajal.', 'rn2.jpg', '2018-09-21', 1, 2, 36, NULL, 456, NULL, NULL, NULL),
(16, 'Sevilla là bài test khó với Lopetegui', 'Sự êm đềm của triều đại Julen Lopetegui có thể bị phá vỡ tại Sanchez Pizjuan đêm nay. Vì sao ư? Bởi Real vốn luôn có vấn đề trong các trận đấu lớn từ mùa giải trước và không có dấu hiệu cho thấy căn bệnh này đã được chữa trị dứt điểm.', 'Khi HLV Zinedine Zidane ra đi, ông đã để lại cho người kế nhiệm một món quà: một danh hiệu lớn (trận tranh Siêu Cúp châu Âu với Atletico) để khởi đầu kỷ nguyên mới. Thế nhưng Julen Lopetegui đã bỏ lỡ nó. Ông hoàn toàn choáng ngợp trước chiến thuật của Diego Simeone để rồi Real nhận bàn thua sớm. Các học trò của ông chỉ gượng đứng dậy trong chốc lát trước khi sụp đổ toàn diện vào cuối hiệp 2 và khoảng thời gian đầu hiệp phụ thứ nhất. \r\n\r\nThất bại này sớm rơi vào quên lãng khi bước vào mùa giải mới và Real chứng minh họ có thể sống khỏe mà không cần đến Cristiano Ronaldo. Các chiến thắng tưng bừng trước Girona, Leganes và Roma, với phong độ ấn tượng của Gareth Bale cùng Karim Benzema khiến các Madridista nức lòng. ', 'ibra.jpg', '2018-09-27', 1, 5, 36, NULL, 123, NULL, NULL, NULL),
(17, 'Ronaldo không nên thi đấu liên tục', 'Dựa vào thành tích trong quá khứ, có thể Cristiano Ronaldo không nên gắng sức thi đấu tất cả các trận tại Serie A. Ở tuổi 33, CR7 khó có thể “tham lam” như thời trẻ.', 'Ronaldo đã đá trọn 8 trận (720 phút) của Juve ở Serie A, gặp các đối thủ Chievo, Lazio, Parma, Sassuolo, Frosinone, Bologna, Napoli và Udinese. Để so sánh, không tiền đạo tốp đầu nào tại Serie A đá nhiều như CR7: Ciro Immobile (Lazio) và Edin Dzeko (Roma) đều chơi 654 phút; Mauro Icardi (Inter) đá 487 phút, Gonzalo Higuain (Milan) chơi 450 phút, Arkadiusz Milik (Napoli) đá 417 phút.', 'r2.jpg', '2018-10-10', 1, 6, 34, NULL, 333, NULL, NULL, NULL),
(18, 'Wayne Rooney: Đi đâu cũng là tượng đài', 'Sức ảnh hưởng của Wayne Rooney đã phải theo năm tháng? Không hề, ít nhất ở Mỹ, anh vẫn là một thần tượng trong mắt hàng triệu người.', 'Khi một ngôi sao lớn đến MLS, nó không khác gì một lời thừa nhận sự hết thời của mình. Đương nhiên là vậy, nhưng mức độ và khát khao cống hiến ở sân chơi dưới tầm này mới thể hiện tính cách của từng người. Với Rooney, một khi đã vào sân, mọi thứ đều nghiêm túc.\r\n\r\nRooney nghiêm túc khi quyết định chuyển đến DC United. Nó thể hiện qua việc anh đã đóng góp 9 bàn và 7 đường kiến tạo chỉ sau 16 trận, trung bình mất 80 phút để góp dấu giày vào 1 bàn thắng. Mới nhất, trong chiến thắng 2-1 trước Chicago Fire cuối tuần trước, Rooney đã lập một cú đúp đẹp mắt.', 'ibra.jpg', '2018-10-11', 1, 2, 34, NULL, 34, NULL, NULL, NULL),
(19, 'Stuttgart 0-3 Bayern Munich', 'Stuttgart 0-3 Bayern Munich', 'Ghi bàn: \r\nBayern Munich: Leon Goretzka (37\'); Robert Lewandowski (62\'); Thomas Muller (76\')', 'http://img.v97.bdpcdn.net/Assets/Media/2018/09/02/14/bayern_t.jpg', '2018-10-02', 1, 6, 40, 4, 33, NULL, NULL, NULL),
(20, 'Monaco 2-3 Marseille', 'Monaco 2-3 Marseille', 'Ghi bàn \r\nMonaco: Tielemans (48\'), Falcao (53\') \r\nMarseille: Mitroglou (45\'), Thauvin (74\'), Germain (89\')', 'http://img.v97.bdpcdn.net/Assets/Media/2018/09/03/17/mon480_t.jpg', '2018-10-10', 1, 2, 42, 4, 22, NULL, NULL, NULL),
(21, 'Nhận định và Bình luận O.Việt Nam vs O.Syria', 'Nhận định và Bình luận O.Việt Nam vs O.Syria', 'Thầy trò HLV Park Hang-seo đã giành chiến thắng nghẹt thở trước O. Bahrain ở những phút cuối trận đấu. Có mặt ở tứ kết ASIAD 2018, đối thủ của O. Việt Nam, đội bóng tây Á Syria. Trước trận đấu diễn ra vào 19h30 ngày 27/8,', 'http://img.v97.bdpcdn.net/Assets/Media/2018/08/25/20/vietnam_t.jpg', '2018-10-03', 1, 5, 38, 4, 56, NULL, NULL, NULL),
(22, 'Nực cười với tình huống xử lý kỹ thuật vụng về của Lukaku', 'Nực cười với tình huống xử lý kỹ thuật vụng về của Lukaku', 'Chân sút của M.U khiến tất cả phải bật cười với tình huống đánh gót hụt ở trận đấu với Brighton tại vòng 2 ngoại hạng Anh.', 'http://img.v97.bdpcdn.net/Assets/Media/2018/08/20/17/romelu-lukaku480_t.jpg', '2018-10-11', 1, 7, 35, 4, 11, NULL, NULL, NULL),
(23, 'Valladolid 0-1 Barcelona', 'Valladolid 0-1 Barcelona', 'Ghi bàn \r\nBarcelona: Ousmane Dembele (57\')', 'http://img.v97.bdpcdn.net/Assets/Media/2018/08/26/17/bar480_t.jpg', '2018-10-18', 1, 2, 36, 4, 55, NULL, NULL, NULL),
(24, 'M.U vs Leicester City chuẩn bị gì trước trận khai màn Premier League 2018/19', 'M.U vs Leicester City chuẩn bị gì trước trận khai màn Premier League 2018/19', 'Sau gần 3 tháng, giải đấu cấp CLB hấp dẫn nhất hành tinh chính thức trở lại với NHM bằng trận cầu đinh giữa Man United và Leicester.', 'http://img.v97.bdpcdn.net/Assets/Media/2018/08/10/14/m.u_t.jpg', '2018-10-18', 1, 2, 35, 4, 34, NULL, NULL, NULL),
(25, 'Những bản hợp đồng đắt giá nhất tại NHA 2018/19', 'Những bản hợp đồng đắt giá nhất tại NHA 2018/19', 'Thị trường chuyển nhượng hè 2018 đã đóng cửa với các CLB ở Premier League. Dưới đây là những tân binh đắt giá nhất ở từng vị trí.', 'http://img.v97.bdpcdn.net/Assets/Media/2018/08/10/14/nha_t.jpg', '2018-10-18', 1, 5, 35, 4, 32, NULL, NULL, NULL),
(26, 'Đội hình xuất sắc nhất châu Âu tính đến thời điểm này', 'Đội hình xuất sắc nhất châu Âu tính đến thời điểm này', 'Các giải VĐQG châu Âu đang chứng kiến phong độ thăng hoa của các ngôi sao. Cùng điểm mặt đội hình xuất sắc nhất kể từ đầu mùa giải. ', 'http://img.v96.bdpcdn.net/Assets/Media/2018/10/13/14/anhdaidien_t.jpg', '2018-10-27', 1, 7, 35, 4, 45, NULL, NULL, NULL),
(27, 'Nemanja Vidic từng suýt đến Liverpool như thế nào?', '8 năm gắn bó trong màu áo Manchester United đưa Nemanja Vidic trở thành huyền thoại trong màu áo Quỷ đó. Anh hợp cùng Rio Ferdinand tạo nên bộ đôi trung vệ vững chắc bậc nhất lịch sử Premier League. Nhưng thay vì đến M.U, Vidic từng suýt tới… Liverpool.', 'Vidic chỉ là một trong số vô vàn cầu thủ tốt Liverpool từng mua hụt: Alexis Sanchez, Gabriel Heinze, Willian, Dele Alli, Dani Alves, Henrikh Mkhitaryan, Diego Costa, Mario Goetze,... Đó là lý do ban lãnh đạo Liverpool hiện nay quyết tâm đầu tư mạnh mẽ vào công tác chuyển nhượng, bằng việc mua về những cầu thủ thực sự tốt. Salah, Alisson, Shaqiri,... là những cầu thủ như thế, và họ chứng tỏ Liverpool đang dần trở thành cáo già trên thị trường chuyển nhượng.\r\n\r\nVề phần Vidic, anh chẳng có gì phải hối tiếc khi bỏ qua Liverpool để đầu quân cho M.U. Đây là nơi anh vươn tầm trở thành hậu vệ hàng đầu thế giới, với mọi vinh quang lớn nhất trong sự nghiệp cầu thủ. Còn Benitez, giờ đây ông vẫn đang cố gắng tìm lại ánh hào quang ở Premier League trong một đội bóng kém danh tiếng hơn nhiều: Newcastle United.', 'degea.jpg', '2018-10-10', 1, 6, NULL, 5, 55, NULL, NULL, NULL),
(28, 'Trong 1 năm rưỡi, Ibra làm được gì cho M.U?', 'Zlatan Ibrahimovic thi đấu cho Manchester United một năm rưỡi. Trong thời gian đó, anh đưa cung bậc cảm xúc của người hâm mộ trải qua từng phút giây đáng nhớ: Từ ngờ vực lúc mới đến, rồi phấn khích khi anh thăng hoa, cuối cùng lại lặng lẽ ngày ra đi.', 'Hôm qua, mạng xã hội Instagram của Manchester United đăng một tấm hình kèm thông điệp: \"Nhìn xem ai tới ghé thăm sân tập của chúng ta này!\". Hai nhân vật trong hình là Michael Carrick, người đang làm trợ lý HLV tại CLB. Người còn lại xuất hiện với chiếc kính râm, nhưng không thể nào nhầm được, đó chính là Zlatan Ibrahimovic.\r\n\r\nMới mùa hè 2 năm trước thôi, Ibrahimovic còn khiến người hâm mộ M.U nức lòng bằng tuyên bố \"tôi chọn M.U làm điểm đến tiếp theo trong sự nghiệp của mình\". Bây giờ anh đã rời CLB được gần nửa năm, trải qua những ngày cuối cuộc đời cầu thủ tại Mỹ. Vậy trong một năm rưỡi ngắn ngủi tại M.U, Ibrahimovic đã làm được những gì.\r\n\r\nVào mùa hè 2016, ở thời điểm nhận lời dẫn dắt M.U, một trong những vấn đề Jose Mourinho phải giải quyết đầu tiên là \"Ai sẽ đá tiền đạo cắm?\". Người đặc biệt nhanh chóng có câu trả lời \"Ai cũng được ngoại trừ Rooney\". R10 khi đó mới 30 tuổi, là đội trưởng ĐT Anh dự EURO 2016, nhưng anh khi đó rõ ràng đã sa sút trông thấy. Khó có thể tin một ngôi sao lại đi xuống tệ hại đến vậy khi mới bước qua tuổi 30.', 'degea.jpg', '2018-10-10', 1, 2, NULL, 5, 33, NULL, NULL, NULL),
(29, 'Nhìn M.U, Mourinho có nhớ về Inter thủa xưa?', '8 năm đã trôi qua kể từ ngày Người đặc biệt giành cú ăn ba cùng Inter Milan. Trái với chuỗi thành tích huy hoàng ngày đó, giờ đây Mourinho đang phải vật lộn cùng Manchester United. ', 'Mourinho và Inter Milan bắt đầu mùa giải mới bằng một tin chẳng lành chút nào. Zlatan Ibrahimovic, tiền đạo chủ lực của đội bóng lên đường đến Barcelona. Sức hút của Pep Guardiola, lối chơi tiki-taka cùng cú ăn ba ở mùa giải 2008/09 là không thể chối cãi. Những ai xem trận chung kết Champions League năm 2009 đều hiểu Manchester United với Rooney, Ronaldo hoàn toàn không có cơ hội giành chiến thắng trước đối thủ.\r\n\r\nBản thân Inter Milan của Mourinho trong mùa giải đó đã đối đầu Manchester United ở vòng loại trực tiếp Champions League. Đó là mùa giải đầu tiên Mourinho dẫn dắt Inter, và ông không thể áp đảo đội hình gồm toàn những hảo thủ của M.U. Adriano và Ibrahimovic là những tiền đạo giỏi, bên cạnh những hảo thủ như Zanetti, Cambiasso... nhưng họ chưa thể làm nên chiến thắng.', 'degea.jpg', '2018-10-18', 1, 2, NULL, 5, 32, NULL, NULL, NULL),
(30, 'Roberto Baggio – Kẻ \'lừa đảo\' vĩ đại nhất', 'Bóng đá vốn là một môn thể thao tập thể. Tuy nhiên, kể từ khi giải thưởng Golden Ball được lập ra vào năm 1956, các giải đấu bóng đá bắt đầu có sự quan tâm lớn hơn tới các giải thưởng cá nhân ', 'Trong 20 năm qua, sự quan tâm này đã trở thành nỗi ám ảnh, với những danh hiệu cá nhân ở hầu hết mọi vị trí trên sân. Tại World Cup, ta có một Quả bóng Vàng cho cầu thủ xuất sắc nhất, Golden Boot dành cho cầu thủ ghi bàn hàng đầu và Golden Glove cho thủ môn xuất sắc nhất.\r\n\r\nĐỉnh cao của những giải thưởng cá nhân chính là danh hiệu Ballon d\'Or được trao cho cầu thủ xuất sắc nhất thế giới của năm. Ngoài ra, huấn luyện viên cũng được vinh danh với danh hiệu FIFA World Coach of the Year.\r\n\r\nCùng với các giải thưởng chính thức này, các chuyên gia và người hâm mộ cũng có xu hướng tự tạo ra những “danh hiệu” để gắn với những cá nhân hoặc thành tích cụ thể hơn. Và vì là tự phong nên đa số những danh hiệu này đều gây nên những cuộc tranh luận không hồi kết.', 'degea.jpg', '2018-10-08', 1, 2, NULL, 5, 12, NULL, NULL, NULL),
(31, 'Lời thú tội của một fan CR7', 'Vì lý do nào đó,Cristiano Ronaldo có rất, rất nhiều người hâm mộ trên khắp hành tinh. Nhưng liệu những người hâm mộ như chúng ta có đang mắc sai lầm?', 'Mười hai năm trước, khi Ronaldo và Messi bắt đầu khẳng định tên tuổi của mình. Mọi thứ ngày càng trở nên rõ ràng khi bạn phải lựa chọn xem mình sẽ nghiêng về phía nào trong số hai siêu sao hàng đầu thế giới. Và kể cả khi bắt đầu chọn xem sẽ hâm mộ ai, bạn vẫn sẽ phải đứng trước hai lựa chọn xem mình sẽ hâm mộ họ như thế nào.\r\n\r\nHoặc bạn hiểu rằng Messi hay Ronaldo cũng chỉ là một cầu thủ, cuộc sống ngoài sân của họ sẽ luôn có những góc khuất không mấy hay ho. Hoặc bạn, sẽ trở thành một fan cuồng theo đúng nghĩa, bênh vực thần tượng trong mọi hoàn cảnh, dù cho những việc họ là có thể chẳng hay ho chút nào. Với tôi, thật tiếc khi đã chọn làm theo vế thứ hai. Tôi hâm mộ Ronaldo với tất cả sự cuồng tín, giống như rất nhiều người mà tôi biết.', 'degea.jpg', '2018-10-10', 1, 2, NULL, 5, 54, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `types`
--

INSERT INTO `types` (`id`, `name`, `status`) VALUES
(1, 'hotnew_slide', 1),
(2, 'top_news', 1),
(3, 'fashion', 1),
(4, 'videos', 1),
(5, 'football_life', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_news`
--

CREATE TABLE `type_news` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `type_news`
--

INSERT INTO `type_news` (`id`, `name`, `status`, `parent_id`) VALUES
(7, 'NGOẠI HẠNG ANH', 1, 0),
(8, 'Tin tức tổng hợp', 1, 7),
(9, 'TÂY BAN NHA', 1, 0),
(24, 'VIỆT NAM', 1, 0),
(25, 'ĐỨC', 1, 0),
(28, 'ITALIA', 2, 0),
(31, 'Tin việt nam', 1, 24),
(32, 'Tin đức', 1, 25),
(33, 'Tin tây ban nha', 1, 9),
(34, 'Tin itatlia', 1, 28),
(35, 'video bóng đá anh', 1, 7),
(36, 'Video bóng đá Tây Ban Nha', 1, 9),
(37, 'Tin trong nước', 1, 24),
(38, 'video bóng đá việt nam', 1, 24),
(39, 'video bóng đá italia', 1, 28),
(40, 'video bóng đá đức', 1, 25),
(41, 'PHÁP', 1, 0),
(42, 'video bóng đá pháp', 1, 41);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(2) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `age`, `status`) VALUES
(56, 'khánh nè', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'quảng trị', 56, 0),
(58, 'khánh nè', 'nekhanh@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'vĩnh linh quảng trị', 13, 0),
(64, 'da', 'da@gmail', 'e10adc3949ba59abbe56e057f20f883e', '24-26-28 Đường số 5A,Cư xá Bình Thới, P.8, Q.11', 56, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `fashion_post`
--
ALTER TABLE `fashion_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authors_id` (`authors_id`);

--
-- Chỉ mục cho bảng `other_news`
--
ALTER TABLE `other_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `type_news_id` (`type_news_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Chỉ mục cho bảng `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_news`
--
ALTER TABLE `type_news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `fashion_post`
--
ALTER TABLE `fashion_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `other_news`
--
ALTER TABLE `other_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT cho bảng `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `type_news`
--
ALTER TABLE `type_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `fashion_post`
--
ALTER TABLE `fashion_post`
  ADD CONSTRAINT `fashion_post_ibfk_1` FOREIGN KEY (`authors_id`) REFERENCES `authors` (`id`);

--
-- Các ràng buộc cho bảng `other_news`
--
ALTER TABLE `other_news`
  ADD CONSTRAINT `other_news_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`);

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`type_news_id`) REFERENCES `type_news` (`id`),
  ADD CONSTRAINT `posts_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`),
  ADD CONSTRAINT `posts_ibfk_4` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
