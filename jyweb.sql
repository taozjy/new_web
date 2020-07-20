-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 �?07 �?20 �?03:13
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `jyweb`
--

-- --------------------------------------------------------

--
-- 表的结构 `about_as`
--

CREATE TABLE IF NOT EXISTS `about_as` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `web_c` int(11) DEFAULT NULL,
  `wz` int(255) DEFAULT NULL,
  `cp` varchar(255) DEFAULT NULL,
  `dz` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `about_as`
--

INSERT INTO `about_as` (`id`, `web_c`, `wz`, `cp`, `dz`) VALUES
(1, 113, 9, '7', '0');

-- --------------------------------------------------------

--
-- 表的结构 `about_user`
--

CREATE TABLE IF NOT EXISTS `about_user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `about_user`
--

INSERT INTO `about_user` (`id`, `name`, `phone`, `text`, `time`) VALUES
(31, '测试', '13113895608', '										\n						萨达萨达斯			', '2020-06-29'),
(23, '撒大苏打', '的撒大', '大飒飒的', '2020-03-30');

-- --------------------------------------------------------

--
-- 表的结构 `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL COMMENT '用户名',
  `password` varchar(255) NOT NULL COMMENT '密码'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin_user`
--

INSERT INTO `admin_user` (`id`, `user`, `password`) VALUES
(0, 'zjy', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `head_title`
--

CREATE TABLE IF NOT EXISTS `head_title` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(255) NOT NULL COMMENT '模块名字',
  `type` varchar(255) NOT NULL COMMENT '是否显示',
  `hrefs` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `head_title`
--

INSERT INTO `head_title` (`id`, `name`, `type`, `hrefs`, `controller`) VALUES
(1, '首页', '1', './index.php', 'Index'),
(2, '公司动态', '1', './index.php?s=index/gsdt/index', 'Gsdt'),
(3, '作品展示', '1', './index.php?s=index/Nr/cp', 'Nr'),
(4, '关于我们', '1', './index.php?s=index/gywm/index', 'Gywm'),
(5, '文章列表', '1', './index.php?s=index/wz/index', 'Wz'),
(6, '搜索', '1', './index.php?s=index/Ss/index', 'Ss'),
(7, 'thinkphp3.2', '1', './index.php', 'index');

-- --------------------------------------------------------

--
-- 表的结构 `head_titlle_broder`
--

CREATE TABLE IF NOT EXISTS `head_titlle_broder` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `father_id` varchar(255) NOT NULL COMMENT '父级元素',
  `name` varchar(255) NOT NULL COMMENT '名字',
  `math` varchar(255) NOT NULL COMMENT '排序号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `index_banner`
--

CREATE TABLE IF NOT EXISTS `index_banner` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `url` varchar(255) NOT NULL COMMENT '图片路径',
  `hrefs` varchar(255) NOT NULL COMMENT '跳转链接',
  `math` varchar(255) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `index_banner`
--

INSERT INTO `index_banner` (`id`, `url`, `hrefs`, `math`) VALUES
(1, './text/images/banner/banner_001.jpg', 'http://www.baidu.com', '1'),
(2, './text/images/banner/banner_002.jpg', 'www.tp5.com', '2');

-- --------------------------------------------------------

--
-- 表的结构 `index_bottom`
--

CREATE TABLE IF NOT EXISTS `index_bottom` (
  `qq_text` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `qr_code_url` varchar(255) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `index_bottom`
--

INSERT INTO `index_bottom` (`qq_text`, `address`, `number`, `photo`, `qr_code_url`, `id`) VALUES
('98674232413', 'xx省xx区', '冀@xxxxxx', '00000', './text/images/abouts/long.jpg', 1);

-- --------------------------------------------------------

--
-- 表的结构 `index_latest`
--

CREATE TABLE IF NOT EXISTS `index_latest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latest_img_url` varchar(255) DEFAULT NULL,
  `latest_text` longtext,
  `latest_title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `index_latest`
--

INSERT INTO `index_latest` (`id`, `latest_img_url`, `latest_text`, `latest_title`) VALUES
(1, './text/images/latest/gs.jpg', '<p>早安心语:人这一辈子太短暂，千万不要辜负生活，身边的朋友没多少，你要知道珍惜才好。</p><p>一、离你越近的地方，路途遥远；最简单的音调，需要最艰苦的练习。早安！<br/>二、秋天也很好，桂花会开，空气会香甜，我们会变好，一切充满希望，温柔又热烈。早安！<br/>三、与人相处：你尊重我，我就尊重你，你无视我，我就无视你，就这么简单！别惯坏了不知领情的人；别喂饱了不懂回馈的心。早安！<br/><br/>四、你再优秀，也总有人对你不堪，你再不堪，也有人认为是限量版的唯一，生命的价值在于自己看得起自已，人生的意义在于努力进取。早安！<br/>五、生命只有一次，没有不老的幸福，也没有不老的时光，能折腾的时候，别让自己闲着。早安！<br/>六、刻意去找的东西，往往是找不到的，天下万物的来和去，都有他的时间。早安！<br/><br/></p>', '早安心语，最美的风景在路上');

-- --------------------------------------------------------

--
-- 表的结构 `index_product`
--

CREATE TABLE IF NOT EXISTS `index_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_url` varchar(255) DEFAULT NULL,
  `product_text` text,
  `time` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `index_product`
--

INSERT INTO `index_product` (`id`, `photo_url`, `product_text`, `time`, `product_name`) VALUES
(9, './text/images/product/gg.jpg', '<p>这是一架钢琴<br/></p>', '2020-01-16', '钢琴'),
(10, './text/images/product/1-200113164T62Z.jpg', '<p>黄昏<br/></p>', '2020-01-15', '黄昏'),
(11, './text/images/product/bx.jpg', '<p>冰雪<br/></p>', '2020-01-16', '冰雪'),
(12, './text/images/product/e.jpg', '<p>白天鹅图片</p>', '2020-02-27', '天鹅'),
(13, './text/images/product/cm.jpg', '<p>红的草莓当素材用<br/></p>', '2019-11-28', '草莓'),
(14, './text/images/product/pkq.jpg', '<p>一只皮卡丘，百万伏特哇呀呀。</p>', '2020-06-18', '皮卡丘'),
(15, './text/images/product/1574251270(1).jpg', '<p>这是一个五线谱，他是一个基础。</p>', '2020-06-18', '五线谱');

-- --------------------------------------------------------

--
-- 表的结构 `index_text`
--

CREATE TABLE IF NOT EXISTS `index_text` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `index_text_name` varchar(255) DEFAULT NULL,
  `index_text_photo_url` varchar(255) DEFAULT NULL,
  `index_text_text` text,
  `index_text_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `index_text`
--

INSERT INTO `index_text` (`id`, `index_text_name`, `index_text_photo_url`, `index_text_text`, `index_text_time`) VALUES
(2, '所谓的人才只不过是你以前的努力而已', '2019-09-16', '<p>\r\n	最近，我突然爱上了古筝。 当我第一次去上课的时候，老师看着我，惊讶地说，大多数人第一次弹古筝的手指会很僵硬。你为什么这么放松？ 以前有基础吗？ 。</p><p>\r\n	&nbsp;</p><p>\r\n	我以前从来没见过古筝。如果有音乐相关的基础，当我还是个孩子的时候，我可能已经学会了两年电子琴，并在小学和管弦乐队一起玩了几年。 后来，我偶尔吹竹笛，但这只是我的业余爱好。</p><p>\r\n	&nbsp;</p><p>\r\n	老师更惊讶：很遗憾你真的很有天赋。 我笑了。</p><p>\r\n	&nbsp;</p><p>\r\n	当我第一次学电子琴的时候，我从来没有说过我有什么天赋。 当时，我只有五岁。我站在我高大的兄弟姐妹中间。 老师说他不明白五行光谱是怎么读的。</p><p>\r\n	&nbsp;</p><p>\r\n	这次你忘了剪指甲吗？ 你回家练习过吗？ 每次我看到老师来的时候，我都很紧张，因为我从喉咙里跳出来，像个受审的囚犯一样蜷缩起来。 \r\n所以我对练习钢琴有阻力。 考试已经正常了，只有一张勉强通过的证书。 看着别人手里拿着鲜红的天鹅绒面，看着他们深红的塑料套装，眼泪就要掉了。 \r\n为什么同一个班的差距如此之大？</p><p>\r\n	&nbsp;</p><p>\r\n	我有音乐天赋吗？ 至少在那个时候，我不认为我根本没有。</p><p>\r\n	&nbsp;</p><p>\r\n	但是当我学会长笛的时候，老师称赞了它。你知道得很好。 如果你教别人几次，你就会明白。 想想音乐学院。 。</p><p>\r\n	<br/></p><p>\r\n	当他学习竹笛时，老师惊讶地说，你很擅长听音乐。你可以写一篇89的论文。很有天赋。 。</p><p>\r\n	&nbsp;</p><p>\r\n	学习乐器需要对音乐有感觉。 \r\n在过去的两年里，电子琴没有学到任何东西，但至少给了我一个机会，让我在音像商店直接去StrausChikovsky和Bach。 \r\n在新的一年里，看电视总是看维也纳金色大厅音乐会的广播，至少可以踩到一点唱歌，而不是跑步两年。 我对声音节奏的把握肯定与其他初学者不同。</p><p>\r\n	&nbsp;</p><p>\r\n	人才是隐藏的，差异很容易掩盖。 即使它本身也可能不存在，有时所谓的人才只不过是以前试图积累的结果而已。</p><p>\r\n	&nbsp;</p><p>\r\n	也许比人才更值得称道。 我看到了一个故事。一个中国人去北欧教授的房子看那个小女孩又甜又可爱。你真漂亮。 \r\n我没想到这种赞美会激怒这位教授。他严肃地对这位中国人说，请不要在将来表扬她的美丽。 \r\n你可以赞美她温暖的微笑，赞美她礼貌和体面。这些都是她自己的练习，与她无关。</p><p>\r\n	&nbsp;</p><p>\r\n	许多心理实验证明，即使是随机分为两组的儿童也被称赞为你真正努力工作的团体。 你比那些在后续行动中表现得更聪明的人更愿意挑战艰巨的任务，更不用说在困难面前放弃了。</p><p>\r\n	&nbsp;</p><p>\r\n	努力使你更加自信和坚定地控制自己；赞扬的才能有时会成为一个绊脚石，使你害怕挑战更高的目标。 如果我不能很好的话，我会被证明是一个才华横溢的人。</p><p>\r\n	&nbsp;</p><p>\r\n	智虎不止一个人问：努力工作是一种天赋吗？ 有些人回答说：当我还是个孩子的时候，我总觉得努力工作是没有天赋的人所做的；当我长大的时候，我意识到原来的努力是最宝贵的才能。 我想给他一个很好的恭维。</p><p>\r\n	&nbsp;</p><p>\r\n	大多数人都在努力工作。你不能浪费你的才能吗？</p><p><br/></p>', '2019-09-05'),
(3, '失败是走向成功的一个步骤', 'dasdasdas', '<p>											</p><p>假如你吃10个饺子才饱，那么是不是第10个饺子让你吃饱的呢?当然不是。如果把吃饱当作是一个成功的目标，那么吃第1个、第2个、第3个，直至吃到第9个饺子，都没有达到“吃饱”这个成功的目标，从表象上看，好像吃前面9个饺子都是“白吃”，都是一次次“失败”的举动，因为没有实现“吃饱”这个成功的目标。其实，这10个饺子，每吃下一个，都是向“吃饱”靠近一步，都是向成功目标迈进一步，绝不是“第10个饺子”让你一步登天吃饱的。<br/>　　<br/>　　美国国际投资顾问公司总裁廖荣典，在谈到如何对待营销中的失败时，也有类似的看法。他认为，假如会见10名顾客，只在第10名顾客处获得200元定单，那么怎样看待前9次的失败与被拒绝呢?他说:“请记住，你之所以赚200元，是因为你会见了10名顾客才产生的结果，并不是第10名顾客才让你赚到200元。而应看成每个顾客都让你做了200÷10=20元的生意。因此，每次被拒绝的收入是20元。<br/>　　<br/>　　廖荣典先生其实是在告诉我们，失败并不都是惨重的付出或毫无意义，只要我们用积极的心态去看待失败，失败也能给我们带来收获，因为对于任何成功来说，前面的每一次失败，都是走向成功的一个步骤、一次跨越。<br/>　　<br/>　　失败是差了一点火候的成功<br/>　　<br/>　　在我们的想像里，失败是成功的反义词，失败与成功绝缘，在失败的废墟里，不可能挖掘到成功的金子。<br/>　　<br/>　　塑料从1868年发明开始，塑料是绝缘体已成为人们的定论。直到上世纪末，美国科学家艾伦教授发明了导体塑料，才打破了这个百年定论，艾伦教授也因此获得了2000年诺贝尔化学奖。<br/>　　<br/>　　艾伦教授是怎样发明导体塑料的呢?那是1975年，艾伦教授到日本进行学术交流，在一所大学实验室的墙角里，艾伦教授发现了一堆废弃的塑料，日本的教授告诉他，这是一个学生做实验失败时留下的废品。艾伦教授把这堆别人认为没用的废品带回国进行研究。一次，艾伦教授在这堆废品里加入微量的碘，想不到，它的导电性能竟然提高了1000倍，成了性能优秀的导体塑料，从而打破了“塑料不能导电”的传统思维，震惊了全世界。<br/>　　<br/>　　本是一次失败留下的废品，艾伦教授只不过在这堆废品里加入了一点点微量的碘，性质就发生了根本的改变，从绝缘体的塑料变成了导体塑料，从毫无用处的废品变成了价值不菲的宝贝，艾伦教授出人意料地从失败的废墟里挖掘到了成功的金子，谁又能说失败不是通向成功的一种导体呢?<br/>　　<br/>　　失败并不是固定不变的，失败并非与成功绝缘，失败只不过是差了点火候的成功，就像你把1度的水加热到99度，这其间看上去你都是“失败”的，因为你并没有改变水的状态，水仍然是液态的水，但这时只要你再加一把柴，再添一把火，让水再升高1度，水的状态就会发生根本性转变，从液态而升化成气态。人生也是如此，失败并不是最终的定论，失败也并不是走到了人生的绝处，此时你只要再添一点点热情，再添一点点信心，再添一点点勇气，这添加的一点点的热情、一点点的信心、一点点的勇气，就会像艾伦教授添加在废塑料里的那一点点微量的碘，使失败成为通向成功的一种导体，最终与成功接通，点亮人生的辉煌。<br/>　　<br/>　　当你身处失败时，请别忘了艾伦教授的实验，别忘了艾伦教授的实验给我们总结出的一条人生定义:失败是差了一点火候的成功，失败是通向成功的一种导体。<br/>　　<br/>　　宽容失败是通向成功的一个通道<br/>　　<br/>　　“如果你不想犯错误，那么就什么也别干。”美国3M跨国公司把失败当作是学习的过程，允许员工犯错误，允许员工失败，把员工失败当作是工作创新的一部分。正因为3M公司有容忍失败的文化环境，才激发了员工无限的创造力，公司平均每天获得两项专利，每年约有500件新产品面世，使公司在激烈的竞争中脱颖而出。<br/>　　<br/>　　“奖励失败，不只奖励成功。”是美国通用电气公司的“施政纲领”。一次，公司一项2000万美元的投资计划因不可测的市场因素而导致失败，但负责计划的经理仍然得到升迁，参与计划的70位职员每人获得一台录像机的奖励。<br/>　　<br/>　　“今天你让公司损失了2.5亿美元，我只希望你明天表现得更好一点。”1998年，微软开发的一种软件，上市后发现有重大瑕疵而召回，给公司造成了2.5亿美元的损失，但微软总裁比尔•盖茨对负责该项目的经理并没有横加指责，而是给他关爱和鼓励。正为因比尔•盖茨容忍下属失败，使这些下属才有了“将功补过”的机会，为公司创造了无数个2.5亿美元的价值。<br/>　　<br/>　　只有永远躺着的人才不会摔倒，永远不下水的船才不会翻船。失败是成功的一部分，失败是走向成功的一个过程，对失败的宽容是走向成功的通道。如果总想“堵死”失败，那成功的路也将无路可走。</p><p>										</p>', '2019-09-05'),
(4, '有人与你共黄昏', '', '<p>											</p><p><br/></p><p>经典语录:</p><p>\r\n	我喜欢冬天温暖的太阳，喜欢在黄昏时看到圆形的太阳慢慢地落在天空中。 橙色的光线非常轻和温暖。 \r\n这种感觉让人们不知不觉地想起沈福先生的“浮生六”：在你有空的时候，在黄昏炉子前微笑，问粥是温暖的。 我认为这是沈先生幸福的最高总结。 \r\n每次我在这里读到，即使窗外的冬天，我的心仍然充满温暖。</p><p>\r\n	&nbsp;</p><p>\r\n	沈复的幸福是，只要有时间，他就会陪云娘到山上去看黄昏的夕阳。 这两个人手牵手唱诗歌，野兽吞下夕阳，弹出流星。 他家里有两个人在举杯喝酒。他微笑着问云南粥是否温暖和快乐。 我经常沉浸在他和云娘的世界里，忘记世界。</p><p>\r\n	&nbsp;</p><p>\r\n	我相信每个人的心都渴望有这样一种温暖的欲望，一个人和你一起看日落和夜晚。</p><p>\r\n	&nbsp;</p><p>\r\n	现实总是微不足道的。 当我下班回家的时候，黄昏被关在门外，被关在门外。 家是一个疲惫一天的港口。</p><p>\r\n	&nbsp;</p><p>\r\n	在这个港口里有粥是最美丽的。 在文学回忆录中，穆欣在最后一课中说：一个人来这里做什么？</p><p><br/></p><p>爱，最可爱，最美丽，最美味。</p><p>\r\n	&nbsp;</p><p>\r\n	生活并不容易，因为我们来到这个世界，我们去爱可爱的人，听最好的歌曲来品尝最美味的生活。 生活不仅是柴油、大米、油和盐的味道，也是赌博书和泼茶的优雅。 只要快乐是快乐的，就很好。</p><p>\r\n	&nbsp;</p><p>\r\n	一天又一天地悄悄地死去。 每天过着美好的生活，才能真正理解生活的滋味。 在黄昏寻找一个人也是甜蜜而温暖的。 和你所爱的人呆在一起是很好的。 正如林语堂先生所说：谦卑的生活可以幸福地生活在宇宙中。 。</p><p>\r\n	&nbsp;</p><p>\r\n	生活的美丽在于你在黄昏时捡起琐碎的地方。 生命的美丽在于，有人在黄昏的灯光下捡起了一堆温暖的粥。</p><p>\r\n	&nbsp;</p><p>\r\n	所以我想在我的余生中被问到你的粥是温暖的，有人在黄昏和你在一起。</p><p>\r\n	&nbsp;</p><p>\r\n	所以我希望每个喜欢黄昏的人总有一天你期待的时间。</p><p>\r\n	&nbsp;</p><p>\r\n	所以我想永远在你的字典里充满微笑和快乐的。</p><p><br/></p><p><br/></p><p>										</p>', '2020-01-07'),
(5, '工作心灵鸡汤经典语录励志', '', '<p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><br/></p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">1、一个人的成功越大，对她说忙的人就越少；一个人的成功越小，对她说忙的人就越多。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">2、<a href="https://www.duanwenxue.com/jingdian/shenghuo/" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); outline: none; text-decoration-line: none;">生活</a>简单一点，开心就好，琐事糊涂一点，经历就好，关系真诚一点，知心才好，梦想低调一点，去追才好，<a href="https://www.duanwenxue.com/jingdian/ganwu/" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); outline: none; text-decoration-line: none;">人生</a>潇洒一点，轻松最好，祝福经常一点，联系才好。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">3、初进职场，不要认为自己什么都不会而丧失信心。只要努力学习，没有人会嘲笑一个为工作而拼尽全力的人。哪怕每天只有一步，前进就是好的！</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">4、人活着，总得有个坚定的信仰，不光是为了自己的衣食住行，还要对社会有所贡献。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">5、坚强的意志和决心可以战胜一切困难，执着的信念和无谓的心灵才是最强大的武器。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">6、人生的四个要点：健康、事业、金钱、<a href="https://www.duanwenxue.com/qinggan/" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); outline: none; text-decoration-line: none;">情感</a>。拥有身体的健康，创造事业的奇迹，积攒财富无数，<a href="https://www.duanwenxue.com/qinggan/qinqing/" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); outline: none; text-decoration-line: none;">亲情</a>、<a href="https://www.duanwenxue.com/qinggan/youqing/" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); outline: none; text-decoration-line: none;">友情</a>和<a href="https://www.duanwenxue.com/qinggan/aiqing/" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); outline: none; text-decoration-line: none;">爱情</a>一切顺利，这就是成功的至高境地！</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">7、很多我们以为一辈子都不会忘记的事情，就在我们念念不忘的日子里，被我们遗忘了。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">8、江湖很大，我很渺小，以前我不争，是性格，现在死磕的争分夺秒，是因为我的梦，我的理想。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">9、真实是人生的命脉，是一切价值的根基，又是商业成功的秘诀，谁能信守不渝，就可以成为。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">10、如果你已经制定了一个远大的计划，那么就在你的生命中，用最大的努力去实现这个目标吧。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">11、要永远记住感情和婚姻不能建立在金钱之上，选择一个可以跟你同舟共济，可以跟你一起承受人生挫折的女人。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">12、党的任务是对所有国家机关的工作进行总的领导，而不是像目前那样进行过分频繁的……往往是对细节的干涉。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">13、要提起，就要完全提起；要放下，则要全心放下。风雨人生路上一定要走得勇敢而坚定。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">14、也许有些人很可恶，有些人很卑鄙。而当我设身为他想象的时候，我才知道：他比我还可怜。所以请原谅所有你见过的人，好人或者坏人。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">15、活着一天、就是有福气、就该珍惜、当我哭泣我没有鞋子穿的时候、我发现有人却没有脚。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">16、事实是这样的，女人除了恋爱、结婚、孩子，还有更丰富的生活与寄托，错过了这些女人同样也谈不上什么真正的<a href="https://www.duanwenxue.com/diary/xingfu/" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); outline: none; text-decoration-line: none;">幸福</a>。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">17、人人心中都有一汪清泉，洗濯你的灵魂，滋润着你的生命。只是因为日常的琐碎生活的纷杂，才掩蔽了她的环佩妙音，朦胧了她的清碧透明。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">18、人生是海，看不到未来的边迹，测不到人生的深度，想不到突来的变故，珍惜自己的人生，探索未来的边迹，<a href="https://www.duanwenxue.com/diary/ganwu/" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); outline: none; text-decoration-line: none;">感悟</a>人生的深度，面对突来的变故。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">19、人生也是一样，难免遭遇坎坷，有时苦难和不幸就像无边黑夜笼罩着你，这时，你就要为自己点一盏灯，不是拿在手上，而是亮在心里。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">20、观念比能力重要，策划比实施重要，行动比承诺重要，选择比努力重要，感知比告知重要，创造比证明重要，尊重生命比别人看法重要！</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">21、不知道自己能活多久，就像你永远无法预测什么时候牙会疼，什么时候你会成功，你不能急，你必须坚信，你是最棒的，独一无二的。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">22、爱人是路，朋友是树；人生只有一条路，一条路上多棵树；有钱的时候莫忘路，缺钱的时候靠靠树；幸福的时候别迷路，休息的时候浇浇树。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">23、懂得放下的人找到轻松，懂得防开的人找到自由，懂得关怀的人找朋友，懂得开怀的人找到<a href="https://www.duanwenxue.com/diary/kuaile/" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); outline: none; text-decoration-line: none;">快乐</a>，快乐的成功而不是成功后才快乐！</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">24、闲暇无事和孤单一样，也是社会上苦难的根源。鲜花是繁衍的诗意，是内在生命力搏动的象征。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">25、一个人表面越完美，背后就隐藏着比常人更多的阴暗面，就如迎着阳光的大树，枝叶越庞大，下面的阴影就越多。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">26、一腔热忱暖事业，工作兢兢业业；满怀豪情写忠诚，做事克己奉公；厚德载物业绩高，名誉地位自来到。祝你职场春风得意，生活万事如意。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">27、当你看见这条<a href="https://www.duanwenxue.com/duanxin/" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); outline: none; text-decoration-line: none;">短信</a>时，幸运已降临到你头上，财神已进了你家门，荣华富贵已离你不远！</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">28、苦难与挫折对于一个有志向，有抱负的人来说，是一笔无价的财富；而对于一个庸者来说，那就是一个沉重的十字架。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">29、神经绷得太紧，生活枯燥无味；偶尔放松<a href="https://www.duanwenxue.com/diary/" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); outline: none; text-decoration-line: none;">心情</a>，善于调节为最；做事不求最好，但求问心无愧；做人踏实认真，胜过取巧捷径；只要心态端正，一生快乐相随！</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">30、如果知道光阴的易逝而珍贵爱惜，不作无谓的<a href="https://www.duanwenxue.com/shanggan/" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); outline: none; text-decoration-line: none;">伤感</a>，并向着自己应做的事业去努力，尤其是青年时代一点也不把时光滥用，那我们可以武断地说将来必然是会成功的。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">31、一个人如果从肯定开始，必以疑问告终。如果他准备从疑问开始，则会以肯定结束。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">32、社会上要想分出层次，只有一个办法，那就是竞争，你必须努力，否则结局就是被压在社会的底层。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">33、地覆盖了所有，湮灭了迷茫，骄傲与哀痛，当一切归于沉静时，世界突然变得清亮明朗。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">34、我们可以躲开大家，却躲不开一只苍蝇。生活中使我们不快乐的常是一些芝麻小事。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">35、面对赛事不惊慌，为了理想勇敢闯。知难而上真风采，失败别把信心丧。调整状态继续上，再迎所有PK场。身坚志强不泄气，顽强拼搏就最强！</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">36、不怕远，就怕志短；不怕缓慢，就怕常站；不怕贫穷，就怕惰懒；不怕对手悍，就怕自己颤。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">37、大部分的人都活得很低调，因为他们本身没有高调的条件；有条件高调的人很低调就不容易了。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">38、鲜花美酒不常有，坎坷困苦也临头，人生得意须冷静，身处逆境莫烦忧，酸甜苦辣都尝过，风风雨雨挺身走，能受磨难真铁汉，奋斗前程铺锦绣！</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">39、梦是一条道路，终点是深不可测的潜意识。梦也是一面镜子，一直映照着人生最初的自己。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; line-height: 2.8em; text-indent: 28px; color: rgb(102, 102, 102); font-family: Arial; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">40、人生犹如过山车，高低转折是永远存在的，凡是平常心来对待，那么成败得失就不会是太可怕的问题了，只要努力付出，便无怨无悔。&nbsp;</p><p><br/></p>', '2020-03-19'),
(6, '生命的意义', '', '<p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(37, 37, 37); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);">某人在野外旅行，被一只狂怒的野兽追赶。为了能逃生，他下到了一口枯井中，结果却发现井底有一条龙，张着血盆大口想吞食他。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(37, 37, 37); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(37, 37, 37); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);">这个不幸的人腹背受敌，井口有猛兽，井底有巨龙。他不得不死死地抓井壁上长出的灌木，但是没过多久，他的手就变得软弱无力，他感到坚持不了多久了。危险正在井口和井底两头等着他，他唯一能做的就是死死地抓住灌木。就在这个时候，来了两只老鼠，它们绕着他抓着的灌木主枝画了一个均匀的圆圈，然后沿着这个圆圈啃了起来。灌木随时都会断裂，而他随时都会落入血盆大口。目睹了这一些，旅行者深知自己必死无疑。就在他死死抓住树枝的时候，他看见灌木的树叶上挂着几滴蜜汁，于是，他伸出舌头舔舐那或许是最后的几滴快乐。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(37, 37, 37); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(37, 37, 37); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);">通常情况下，要消除某种单一的压力或恐惧，对于有几分勇气的人来说，并不算什么；但是面对多方的压力和恐惧，仍能以全部力量与逆境抗争，那就很了不起。倘若身陷大难之中，甚至面对死亡，仍能充分地去发现和体味应有的快乐，那才是真正的勇气。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(37, 37, 37); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(37, 37, 37); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);">任何一种有价值的追求无不充满艰险，因而，体验风险也就是对生命本质的认同，对于命运的任何一种抗争都不可能是一劳永逸的。因为害怕困难和危险而放弃行动，只能说明一个人的懦弱。而当困难和危险近在眼前，尽管渴求生命，却依然能清醒地感受到现实的境遇，在漫长的压抑和恐惧的煎熬中，抓住生命的树枝，充分证明自己的生命力，这才是生命意义的真实写照。</p><p><br/></p>', '2020-06-27'),
(7, '励志的句子致自己简短', '', '<p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">1、你越是尽力抓住一些东西，你就会受到越多的伤害。最好放开你的手，放开它。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">2、永远不要放弃你真正想要的。等待是困难的，但后悔更糟糕！</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">3、走今天的路，过今天的生活，把手头的事情做好，把握今天的幸福，尽你所能做到最好。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">4、我相信糟糕的日子已经过去，剩下的就是好运了。</p>', '2020-06-05'),
(8, '治愈系经典句子', '', '<p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">1、做一个阳光的人。不悲伤，不急躁。坚强，向上，靠近太阳，做一个更好的自己，你不需要别人太多的赞美，因为你知道自己有多好。内在的力量总是比炫耀的外表好。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">2、如果你自然来，你将不能留下来。不要违背你的意愿，不要故意，不要太在意，放下你的执念，追随命运是最好的生活。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">3、生活偶尔需要一点任性。如果你不想坚持，你就不会坚持。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">4、不知道如何拒绝的人不会真正受到别人的尊重，即使他们已经筋疲力尽。因为对方已经习惯了你的服从。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">5、不要太在意别人在背后说你什么，因为那些比你强壮的人懒得提起你。诽谤本身就是一种希望。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">6、你必须全力以赴实现你的梦想。不管流言是什么，做你自己。赢了，也要漂亮地赢。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">7、不管你说多少，最好保持沉默。如果你给予更多，你最好理解我。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">8、给时间，既往不咎，让我们开始吧。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">9、最可悲的是，当你遇到一个特别的人，并意识到你们永远不能在一起，迟早，你必须放弃。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">10、人们总是会遇到挫折。你今天决定。如果你不珍惜今天，那么你的明天将掌握在别人手中。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">11、我是否感到悲伤都是我的错。不管我是否感到悲伤，这都是我的心。我们都喜欢努力变得勇敢。我们都喜欢哭，笑着什么也不说。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">12、用我所有的努力和真诚，我没有证明你爱我，但我们不适合。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">13、如果生活在某种程度上变坏了，它会变得更好，因为它不可能变得更坏。只有经过努力工作，我才知道许多事情。我坚持来到这里。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">14、没有一个无情的人会为某个人献出自己的心和肺。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">15、你不明白一个人在喉咙里，哭泣，害怕被安慰，咽下眼泪，继续微笑的感觉。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">16、世界上所有不令人满意的事情都取决于努力工作。接受成长，也接受所有的不和谐。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">17、生活中最可怕的事情不是眼睛看不见，而是心迷失了方向。幸福是只要你握着右手，即使你迷失了方向，你也不再害怕。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">18、你买不起第一眼看到的衣服，第一眼看到的人往往不喜欢你。你真正喜欢和想要的，没有什么是容易得到的。这就是你努力工作的原因。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">19、人们声称最美好的时光实际上是最痛苦的，只有当他们事后回忆时，他们才会如此快乐。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">20、如果它没有开始，它将永远不会到达。别忘了向自己承诺，以及你想去哪里。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">21、有时候，你想向10，000个人证明这一点。后来，你发现只有一个人理解它。够了。</p><p><br/></p>', '2020-06-14'),
(9, '经典语录', '', '<p><span style="color: rgb(68, 68, 68); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; background-color: rgb(255, 255, 255);">有些人，不会忘，由于不舍得，有些人，必须要忘，因为不值得；一个转身，就可以是一个结束，一个转身，也可以是一个新的开始；相信人，相信感情，相信善良的存在，要开朗，要坚韧，要温暖的活着；每天早晨，提醒自己，生命短暂而美好，没时间纠结，没时间计较；人生，没有可不可以，只有愿不愿意！</span></p>', '2020-06-10'),
(10, '治愈系经典句子,励志的句子致自己简短', '', '<p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">1、永远活出自己，笑得特别灿烂，不要在意别人的指指点点，做好自己，让那些看不起你的人爬下来，让那些看不起你的人更喜欢你。</p><p style="overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;;">2、不要让别人的话语、表情和行为影响你的情绪。我希望你每天醒来时心情愉快。只有好好生活和工作，你才能遇到美好的事物。</p><p><br/></p>', '2020-06-11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
