/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : mspms

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2013-05-25 21:46:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cj_article`
-- ----------------------------
DROP TABLE IF EXISTS `cj_article`;
CREATE TABLE `cj_article` (
  `a_id` int(10) NOT NULL AUTO_INCREMENT,
  `a_title` varchar(200) NOT NULL,
  `a_author` int(5) NOT NULL,
  `a_source` varchar(50) DEFAULT NULL,
  `a_content` text NOT NULL,
  `a_date` date NOT NULL,
  `a_status` enum('locked','published','trash','draft') DEFAULT 'draft',
  `a_category` int(5) NOT NULL,
  `a_updateTime` datetime DEFAULT NULL,
  `a_creatTime` datetime DEFAULT NULL,
  `a_click` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`a_id`),
  KEY `a_category` (`a_category`),
  KEY `a_author` (`a_author`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_article
-- ----------------------------
INSERT INTO `cj_article` VALUES ('1', '学术梯队', '1', '', '&amp;nbsp;', '2013-05-21', 'published', '2', null, '2013-05-21 15:44:33', '0');
INSERT INTO `cj_article` VALUES ('2', '人才培养', '1', '', '&amp;nbsp;', '2013-05-21', 'published', '4', null, '2013-05-21 15:46:07', '0');
INSERT INTO `cj_article` VALUES ('3', '成果转化', '1', '', '&amp;nbsp;', '2013-05-21', 'trash', '0', null, '2013-05-21 15:46:26', '0');
INSERT INTO `cj_article` VALUES ('4', '本科生', '1', '', '&amp;nbsp;', '2013-05-21', 'published', '8', null, '2013-05-21 15:48:36', '0');
INSERT INTO `cj_article` VALUES ('5', '研究生', '1', '', '&amp;nbsp;', '2013-05-21', 'published', '9', null, '2013-05-21 15:48:53', '0');
INSERT INTO `cj_article` VALUES ('6', '科研方向', '1', '', '&amp;nbsp;', '2013-05-21', 'trash', '0', null, '2013-05-21 15:58:01', '0');
INSERT INTO `cj_article` VALUES ('7', '微电子技术基础研究', '1', '', '&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	开展半导体材料、工艺、新型器件及物理机理研究。主要研究领域包括电子功能陶瓷材料、纳米电子材料、材料微结构及功能晶体；新型显示材料如低分子有机电致发光(OLED)和高分子或聚合物有机电致发光（PLED）材料等；显示器件，高清晰度平板显示扫描方法，显示驱动控制芯片；第三代宽禁带半导体材料及器件的研究，各种新型半导体有源和无源光电器件，汽车电子半导体传感器及系统等。该方向将为重庆市大力发展微电子产业提供人才和技术支持。\r\n&lt;/p&gt;', '2013-05-21', 'published', '12', '2013-05-21 23:36:38', '2013-05-21 15:59:55', '0');
INSERT INTO `cj_article` VALUES ('8', '集成电路芯片设计', '1', '', '&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&amp;nbsp;主要研究集成电路芯片设计的系统优化和设计方法。设计了DAB&amp;nbsp;数字接收终端基带解码芯片（包含信道解码和MP2音频解码），芯片不仅实现了所必须的解码功能，其科学价值还在于芯片低功耗设计技术和DAB信道解码的关键技术上的创新，芯片采用了全硬件信号处理技术，使得复杂的运算如COFDM, Viterbi,&amp;nbsp;时间交帜等大为简化，从而在集成度、功耗、性能、价格诸方面均优于国外芯片。 正是芯片的低功耗成就了便携式DAB接收终端，所开发的整机产品具有体积小、功耗低、成本低的竞争力，其中灵敏度和移动接收稳定性达到了国际先进水平，功耗指标达到了国际领先水平。芯片和终端产品已经在产业化和市场开拓方面取得了进展，项目已经和多家企业合作，开发了数款DAB/DMB终端产品，并出口到了英国。本项目成就了国内设计的核心芯片的性能指标全面领先于国外的芯片； 成就了基于自主核心芯片的整机领先于国外的同类产品，是在微电子战略性产业加强国家核心竞争力的成功实践。而这样的成果出自高校，尤为难得。\r\n&lt;/p&gt;', '2013-05-21', 'published', '13', '2013-05-21 23:36:59', '2013-05-21 16:00:16', '0');
INSERT INTO `cj_article` VALUES ('9', '数字广播多媒体信息发布技术', '1', '', '&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&amp;nbsp;&lt;span style=&quot;line-height:1.5;&quot;&gt;利用DAB数字广播搭建公共信息发布系统，如数字校园广播系统和公共应急广播系统。公共信息发布系统包括发射系统和接收终端两大块，实验室研究发射端硬件系统的便携式设计、发射端软件系统设计、开发了一系列的接收终端，研究应急平台的网络规划、以及应急信息传输的实时性和可靠性设计等。&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	目前实验室已经在重庆邮电大学搭建了数字校园广播系统。该系统覆盖整个校园,支持播放教务、校务、和宣传、娱乐节目。公共应急广播系统的关键技术也已经开发完成。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	这些应用的许多方面在世界范围内是独创的，而且关键的技术问题和成本也只有本实验室唯一解决的。实验室不仅具有核心技术，而且具有原始创新性和专有性，可以在技术和市场上主导和引领这个产业。\r\n&lt;/p&gt;', '2013-05-21', 'published', '14', '2013-05-21 23:36:00', '2013-05-21 16:01:41', '0');
INSERT INTO `cj_article` VALUES ('10', '微电子重点实验室介绍', '1', '', '&lt;p style=&quot;text-align:center;text-indent:2em;&quot;&gt;\r\n	&lt;img src=&quot;/meelab2/upload/image/20130523204249_38303/IMG_4457.jpg&quot; alt=&quot;&quot; /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	重庆邮电大学微电子工程重点实验室在学校和光电工程学院的领导下，于2001年正式成立。经过几年的不懈努力，于2004年8月成为重庆市教委批准建设的重庆市高校重点实验室。是我国西部地区特别是重庆地区微电子人才培养和微电子技术研发的重要基地之一。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;div&gt;\r\n	微电子工程重点实验室依托于重庆邮电大学“微电子学与固体电子学” 学科多年的深厚积累，有雄厚的技术和学术优势，是重庆市的重点学科、重庆邮电大学重点建设的学科，其所在一级学科“电子科学与技术”具有“微电子学与固体电子学”、“电路与系统”、“电磁场与微波技术”、“物理电子学”及“集成电路工程”5个二级学科的硕士授权点。是重庆邮电大学从事微纳电子科学技术创新研究的平台。\r\n&lt;/div&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;div&gt;\r\n	过几年的学科建设，实验室在数字多媒体芯片设计，半导体新工艺，新材料、新器件、半导体工艺设备，微电子机械系统，非线性电路与系统等研究领域取得了丰硕成果并形成了一支有丰富经验的教学、科研队伍。尤其是在DAB/DMB芯片和接收终端产品的研发领域具有鲜明的特色。实验室定位主要面向重庆市的社会经济发展需求，辐射西南地区。应用研究达到国内先进水平。瞄准国际前沿科学问题开展创新研究。&lt;br /&gt;\r\n实验室非常重视科研队伍的建设，实验室拥有一支以“兰克奖”得主王国裕教授和陆明莹教授为核心，以政府津贴专家、博导为支撑，以重庆市十大杰出青年群体、市科技创新团队、市教学团队为主的科研教学队伍。目前实验室共有固定研究人员40名，其中教授17人，副教授12人，25人具有博士学位，13人具有硕士学位。同时实验室还注意引进国外优秀人才，在引进国外顶尖集成电路设计人才方面取得了重大成绩。目前，实验室有海外留学人员3人，均为海归博士，其中王国裕教授和陆明莹教授还曾获英国顶级科学奖之一的“兰克奖”（Rank Prize），这是世界顶级的高科技科学奖之一。近五年来主持和参与包括国家自然科学基金在内的省部级以上的科研项目近51项，在国内外权威、核心期刊上发表研究论文300余篇（其中SCI/EI检索130余篇次），获得省部级科研奖励6项，申请专利26项，出版专著及教材4项，取得了较为丰富的科研成果。\r\n&lt;/div&gt;', '2013-05-23', 'published', '1', '2013-05-23 20:43:00', '2013-05-21 22:21:58', '0');
INSERT INTO `cj_article` VALUES ('11', '电子系统和应用研究', '1', '', '&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;span style=&quot;font-size:16px;&quot;&gt;&amp;nbsp;&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;span style=&quot;font-size:16px;&quot;&gt;包括非线性电路与系统研究、医疗物联网的应用研究、可逆逻辑综合理论及其实现方法的研究。非线性电路与系统研究主要包括混合系统的复杂行为研究，状态空间的结构与分岔行为研究，混沌的应用研究，行走动力学研究。&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;span style=&quot;font-size:16px;&quot;&gt;医疗物联网项目主要研究物联网在医疗系统中的运用。可逆逻辑综合研究快速完成可逆逻辑综合及生成优化电路的新方法。&lt;/span&gt;\r\n&lt;/p&gt;', '2013-05-21', 'published', '11', '2013-05-21 23:35:30', '2013-05-21 22:40:45', '0');
INSERT INTO `cj_article` VALUES ('12', '专业介绍', '1', '', '&amp;nbsp;', '2013-05-04', 'trash', '0', null, '2013-05-04 20:28:14', '0');
INSERT INTO `cj_article` VALUES ('13', '专业介绍', '1', '', '&amp;nbsp;这是专业介绍的内容！', '2013-05-04', 'published', '15', '2013-05-04 20:30:40', '2013-05-04 20:28:52', '0');
INSERT INTO `cj_article` VALUES ('14', '清华同方成立微电子公司从事IC卡芯片生产', '1', '这是文章来源', '                &lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	清华同方股份有限公司宣布将成立微电子公司。新公司由清华同方股份有限公司和清华大学共同组建，新公司取名清华同方微电子有限公司。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	清华同方股份有限公司将投资人民币2,999万元(362万美元)，拥有新公司51%的股权。由清华微电子研究所负责技术开发，公司主要从事拥有独立知识产权的IC卡芯片的设计、开发和生产。该公司表示会首先进行拥有自主核心技术非接触IC卡芯片的开发。他们还将开发读卡机芯片，包括RF模块、协议模块、加密模块、解密模块。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	IC卡也叫智能卡，内部的核心是一个微型的单片机芯片，上面固化了预先编写好的系统程序，实际上就是一个完整的计算机系统。目前的硬件工艺也已经可以做到在一段时间内保证破坏者不能通过破坏硬件的方法来了解IC卡内部的保密信息，因而只要有一个比较完善的IC卡的操作系统，就可以防止伪造，保护内部的保密信息。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	作为通讯和信息产业中的关键技术，IC卡芯片在金融、身份识别、社保、税收等领域都有广阔的应用前景。清华同方股份有限公司表示，投资成立新公司将加速核心技术的开发，并且增强产品在全球电讯领域的竞争力。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	清华同方股份有限公司是一家高科技企业，生产的产品覆盖网络技术、软件与系统集成，电子通讯、微机光盘、信息加工与服务等领域。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;span id=&quot;__kindeditor_bookmark_end_11__&quot;&gt;&lt;/span&gt;\r\n&lt;/p&gt;\r\n      \r\n      ', '2013-05-04', 'published', '15', '2013-05-04 22:21:23', '2013-05-04 21:03:15', '0');
INSERT INTO `cj_article` VALUES ('15', '[公告]华微电子：2012年度社会责任报告', '1', '中财网', '&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	吉林华微电子股份有限公司&amp;nbsp;&lt;br /&gt;\r\n2012年度社会责任报告&amp;nbsp;&lt;br /&gt;\r\n本公司董事会及全体董事保证本报告内容不存在任何虚假记载、误导性陈述或重大遗漏，并&lt;br /&gt;\r\n对其内容的真实性、准确性和完整性承担个别及连带责任。&amp;nbsp;&lt;br /&gt;\r\n一、前言&amp;nbsp;&lt;br /&gt;\r\n（一）本报告乃根据上海证券交易所（以下简称“上交所”）《关于做好上市公&lt;br /&gt;\r\n司2012年年度报告工作的通知》的要求，结合公司在履行社会责任方面的具体情况&lt;br /&gt;\r\n而编制的。&amp;nbsp;&lt;br /&gt;\r\n（二）本报告是吉林华微电子股份有限公司（以下简称“公司”或“华微电子”）&lt;br /&gt;\r\n发布的第五份社会责任报告。本报告总结和反映了2012年度（以下简称“本报告期”）&lt;br /&gt;\r\n本公司、分公司、控股子公司、合营公司在生产经营的同时，在保护股东、职工、&lt;br /&gt;\r\n客户、投资者等利益相关方的合法权益，对社会、环境负责等方面所履行社会责任&lt;br /&gt;\r\n的实践及评估情况。&amp;nbsp;&lt;br /&gt;\r\n（三）本报告经本公司2013年4月25日召开的第五届第九次董事会会议审议&lt;br /&gt;\r\n通过。&amp;nbsp;&lt;br /&gt;\r\n二、公司概况&amp;nbsp;&lt;br /&gt;\r\n吉林华微电子股份有限公司是由吉林华星电子集团有限公司作为主要出资人和&lt;br /&gt;\r\n发起人，联合四川长虹、厦门永红、广州乐华、吉林龙鼎四家公司共同发起设立的&lt;br /&gt;\r\n股份制企业，1999年10月注册成立，2001年2月经中国证监会核准发行股票，于&lt;br /&gt;\r\n2001年3月在上海证券交易所挂牌上市,股票代码600360，为国内功率半导体器件&lt;br /&gt;\r\n领域首家上市公司。&amp;nbsp;&lt;br /&gt;\r\n公司现注册资本67,808万元，总资产31.15亿元，员工3,100余人，技术人员&lt;br /&gt;\r\n占公司总人数的30%以上，占地面积近40万平方米，建筑面积13.5万平方米，净化&lt;br /&gt;\r\n面积1.70万平方米，主要净化级别为0.3微米百级。&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n公司主要经营范围包括：半导体分立器件、集成电路、电力电子产品、汽车电&lt;br /&gt;\r\n子产品、自动化仪表、电子元件、应用软件的设计、开发、制造与销售；经营本公&lt;br /&gt;\r\n司自产产品及相关技术的出口业务，经营本公司生产、科研所需的原辅材料、机械&lt;br /&gt;\r\n设备、仪器仪表、零配件及相关技术的进出口业务，经营本公司的进料加工和“三&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n来一补”业务；氢气、氧气、氮气、压缩空气的制造与销售。&amp;nbsp;&lt;br /&gt;\r\n三、股东和债权人权益保护&amp;nbsp;&lt;br /&gt;\r\n（一）完善法人治理&amp;nbsp;&lt;br /&gt;\r\n公司董事会围绕完善治理结构，坚持抓基础、抓重点、抓关键，不断提升规范&lt;br /&gt;\r\n动作水平。根据《公司法》、《证券法》、《上市公司治理准则》等有关法律法规和《公&lt;br /&gt;\r\n司章程》的规定，制订并不断完善了各项管理制度，并明确了股东大会、董事会、&lt;br /&gt;\r\n监事会、经营层的权责范围和议事决策程序，做到各司其职、权责分明、协调运转、&lt;br /&gt;\r\n有效制衡。对关联交易、对外担保、募集资金管理、内幕信息管理、信息披露等重&lt;br /&gt;\r\n大事项也进行了具体规定，在制度层面上既有效维护了股东的合法权益，也提高了&lt;br /&gt;\r\n公司的运营效率。&amp;nbsp;&lt;br /&gt;\r\n报告期内，公司在原有制度体系基础上，修订完善了《公司章程》、《独立董事&lt;br /&gt;\r\n工作细则》、《内幕信息知情人登记制度》等规章制度，进一步完善提高治理结构与&lt;br /&gt;\r\n水平。&amp;nbsp;&lt;br /&gt;\r\n（二）信息披露&amp;nbsp;&lt;br /&gt;\r\n公司董事会秘书为信息披露主要责任人，董事会秘书处为信息披露事务管理部&lt;br /&gt;\r\n门，负责公司信息披露管理工作。公司根据中国证监会《上市公司信息披露管理制&lt;br /&gt;\r\n度》和上海证券交易所《股票上市规则》等规章制度的要求，制定并实施了《信息&lt;br /&gt;\r\n披露事务管理制度》、《董事会秘书工作制度》等制度，确保公司依法履行信息披露&lt;br /&gt;\r\n义务，严格遵守&quot;公平、公正、公开&quot;的原则，真实、准确、及时、完整地披露公司&lt;br /&gt;\r\n定期报告和临时公告等相关信息；同时公司还积极参加中国证监会吉林监管局组织&lt;br /&gt;\r\n的网上业绩交流会活动，通过网络与公司股东进行沟通交流，确保所有股东平等及&lt;br /&gt;\r\n时的获取公司应披露的信息，维护股东，尤其是中小股东的合法权益。&amp;nbsp;&lt;br /&gt;\r\n公司指定《中国证券报》、《上海证券报》、《证券时报》、《证券日报》和&lt;br /&gt;\r\n上海证券交易所网站为公司信息披露报刊及网站。&amp;nbsp;&lt;br /&gt;\r\n（三）投资者关系&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n投资者是企业的“上帝”，投资者对企业正确、完整的认知是企业在资本市场&lt;br /&gt;\r\n实现自身价值的基础保障，因此华微电子一直致力于提升投资者关系管理水平。报&lt;br /&gt;\r\n告期内，公司严格按照《投资者关系管理办法》的规定，持续加强与投资者和研究&lt;br /&gt;\r\n机构之间的信息沟通，开展各种形式的投资者关系管理活动，促进投资者对公司运&lt;br /&gt;\r\n营和发展战略的了解和认同，并在社会公众中树立了良好的诚信形象。&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n1、在公司网站及时刊登公司法定披露信息和近期发生的重要事件，让投资者和&lt;br /&gt;\r\n社会公众全面动态掌握了公司经营发展态势。&amp;nbsp;&lt;br /&gt;\r\n2、公司通过在年度股东大会和网上业绩说明会上安排公司董事长、总经理和其&lt;br /&gt;\r\n他高管人员与股东和社会公众投资者、研究机构进行直接交流，就公司的年度生产&lt;br /&gt;\r\n经营情况、未来发展规划以及投资者、研究机构关注的问题进行直接互动交流。&amp;nbsp;&lt;br /&gt;\r\n3、认真做好机构投资者调研访问的接待工作。据不完全统计，2012年公司共接&lt;br /&gt;\r\n待机构投资者的行业分析师、研究员和基金经理四十多人次来公司现场参观、调研。&lt;br /&gt;\r\n公司董事长及管理层的主要成员与机构投资者和行业研究员进行广泛、深入的交流。&lt;br /&gt;\r\n良好的投资者关系、开放的双向沟通机制，有助于机构投资者把握公司总体情况，&lt;br /&gt;\r\n理解公司经营思路和长期发展战略，提升了公司整体形象。&amp;nbsp;&lt;br /&gt;\r\n4、积极加强与中小投资者的沟通。为保证与中小投资者的沟通顺畅，公司一方&lt;br /&gt;\r\n面继续确保专线电话的接听工作，及时认真解答投资者的疑问，耐心做好解释、沟&lt;br /&gt;\r\n通工作，对投资者提出的合理意见和建议定期向管理层专题汇报，全年共接待投资&lt;br /&gt;\r\n者电话累计近千次；另一方面，动态把握公司外部网站投资者关系管理专栏和公司&lt;br /&gt;\r\n投资者关系管理专门邮箱的情况，及时将重要留言和邮件反馈给管理层，对投资者&lt;br /&gt;\r\n的问题进行答复。&amp;nbsp;&lt;br /&gt;\r\n（四）股东回报&amp;nbsp;&lt;br /&gt;\r\n为进一步增强公司分红政策的透明度，完善和健全公司分红决策和监督机制，&lt;br /&gt;\r\n保持利润分配政策的连续性和稳定性，保护投资者的合法权益，便于投资者形成稳&lt;br /&gt;\r\n定的回报预期，根据中国证监会《关于进一步落实上市公司现金分红有关事项的通&lt;br /&gt;\r\n知》（证监发[2012]37号）以及吉林监管局《关于进一步落实上市公司现金分红有&lt;br /&gt;\r\n关事项的通知》（吉证监发[2012]112号）的有关要求，对《公司章程》关于利润分&lt;br /&gt;\r\n配的相关条款进行了修订。根据修订后的《公司章程》及综合考虑公司实际情况、&lt;br /&gt;\r\n经营发展规划、股东回报、社会资金成本以及外部融资环境等可能影响利润分配的&lt;br /&gt;\r\n因素，董事会拟订了《公司分红政策和未来三年股东回报规划》，以回报投资者，&lt;br /&gt;\r\n确保公司全体股东的合法权益。&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n公司近三年现金分红情况表：&amp;nbsp;&lt;br /&gt;\r\n单位：万元&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n项目&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n2009年度&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n2010年度&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n2011年度&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n分红年度合并报表中&lt;br /&gt;\r\n归属于上市公司股东&lt;br /&gt;\r\n的净利&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n26,036,987.76&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n82,490,879.67&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n101,742,497.87&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n分配方案&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n每10股派发现金股利&lt;br /&gt;\r\n0.50元（含税）&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n每10股派发现金股利&lt;br /&gt;\r\n0.11元（含税）；每&lt;br /&gt;\r\n10股送红股1股；每&lt;br /&gt;\r\n10股转增2股。&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n每10股派发现金股利&lt;br /&gt;\r\n0.50元（含税）&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n现金分红&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n26,080,000.00&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n5,737,600.00&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n33,904,000.00&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n占合并报表中归属于&lt;br /&gt;\r\n上市公司股东净利润&lt;br /&gt;\r\n的比例（%）&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n100.17&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n70.17(6.96)&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n33.32&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n（五）债权人权益保护&amp;nbsp;&lt;br /&gt;\r\n公司在注重对股东权益保护的同时，高度重视对债权人合法权益的保护，严格按&lt;br /&gt;\r\n照与债权人签订的合同履行债务，及时通报与其相关的重大信息，保障债权人的合&lt;br /&gt;\r\n法权益。&amp;nbsp;&lt;br /&gt;\r\n四、供应商和客户利益最大化&amp;nbsp;&lt;br /&gt;\r\n公司秉承诚信经营理念，将客户作为企业存在的最大价值，重视与客户的共赢&lt;br /&gt;\r\n关系，致力于为客户提供优质产品和各项优质服务。公司坚持以市场为导向，以客&lt;br /&gt;\r\n户为中心，以效益为目标，不断提升客户价值。&amp;nbsp;&lt;br /&gt;\r\n1、搭建与合作者共同成长进步的基础平台，巩固战略合作伙伴关系。&amp;nbsp;&lt;br /&gt;\r\n公司长期坚持对供应商进行现场审核，根据需要及时提出改进建议，并有针对&lt;br /&gt;\r\n性地修订质量保证协议，不断完善外包投诉作业指导书，规范回货质量确认、反馈&lt;br /&gt;\r\n系统，提升外包厂家的批次管理、异常批管理和内部处理芯片质量问题的流程，提&lt;br /&gt;\r\n高工作效率。问题的提出与整改，有效地推动了外协厂商的品质管理水平与质量管&lt;br /&gt;\r\n控意识，一方面对我司后续产品的质量提供了基本保证，另一方面促使合作者寻求&lt;br /&gt;\r\n改进与提高，有利于与供应商建立良好的合作关系。同时，公司坚持召开每年一度&lt;br /&gt;\r\n的供应商会议，通过彼此交流增进友谊，拓宽信息渠道，加强合作，共谋发展，实&lt;br /&gt;\r\n现双赢。&amp;nbsp;&lt;br /&gt;\r\n2、以“诚信”立本，守法经营，树立良好企业形象。&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n华微电子以“诚信”立本，从企业创立之初即强调并落实诚信体系建设，并在&lt;br /&gt;\r\n日常经营运作过程中始终以其为指导，时刻体现高度的诚信意识与社会责任感。正&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n是因为公司一贯坚持“诚实守信”的经营原则，将客户利益摆在第一位，因而塑造&lt;br /&gt;\r\n了诚信可靠的守法企业公民形象。&amp;nbsp;&lt;br /&gt;\r\n3、建立起快速内部反应机制，提高客户满意度。&amp;nbsp;&lt;br /&gt;\r\n公司建立了行之有效的客户投诉处理制度和流程，建立大客户24小时响应机&lt;br /&gt;\r\n制。在公司总体经营思路的指导下不遗余力地强化客户服务意识，以客户需要为导&lt;br /&gt;\r\n向，确立“急事、小事不过天，大事、难事不过三”的快速响应机制。针对客户投&lt;br /&gt;\r\n诉信息，由公司质量管理部负责汇总，并形成分析报告，组织由技术部门、供应链&lt;br /&gt;\r\n管理中心、生产系统参加的质量分析会，对客户投诉和质量问题进行分析，提出预&lt;br /&gt;\r\n防和纠正措施，质量管理人员和技术负责人员深入产线，现场解决问题，确保未出&lt;br /&gt;\r\n厂的产品不出现同样的质量问题。同时，针对客户投诉回复质量和解决质量设定相&lt;br /&gt;\r\n应的绩效考核指标，层层落实，不断提升公司的对外品质形象。&amp;nbsp;&lt;br /&gt;\r\n五、员工权益保护&amp;nbsp;&lt;br /&gt;\r\n（一）员工培训及福利政策&amp;nbsp;&lt;br /&gt;\r\n1、强化员工的素质、能力培养，为员工铺就完善的职业发展道路。&amp;nbsp;&lt;br /&gt;\r\n公司坚持把培养科技创新人才作为实施“科技兴企”战略的重要手段，切实加&lt;br /&gt;\r\n强管理人员专业培训、员工技能培训和继续教育，通过培训不断提高员工的素质与&lt;br /&gt;\r\n工作技能。因此，根据公司和员工个人培训需求，公司制定了《员工培训管理程序》&lt;br /&gt;\r\n及《公司年度培训计划》，确保公司培训有针对性和有效性。报告期内，公司紧紧&lt;br /&gt;\r\n围绕企业生产经营和发展战略，以提高员工综合素质为目标，采取“引进来”和“走&lt;br /&gt;\r\n出去”相结合的培训方式，聘请专业培训机构和合作的科研院校专家到公司进行授&lt;br /&gt;\r\n课和技术交流。全年公司员工平均接受培训40学时以上，管理人员接受培训50学时&lt;br /&gt;\r\n以上；公司还选派12人到高校进行进修深造，为公司未来发展储备高端管理人才。&lt;br /&gt;\r\n公司一直致力于“以人为本”，努力营造“公平、公正、诚信、务实”的人文氛围，&lt;br /&gt;\r\n鼓励员工针对自己的岗位在工作中遇到的问题提出意见，通过合理化建议、董事长、&lt;br /&gt;\r\n总经理信箱、座谈会等方式，加强企业与员工的沟通，协调企业经营管理目标与员&lt;br /&gt;\r\n工的个人利益相一致，实现共同发展，营造和谐健康的工作环境。&amp;nbsp;&lt;br /&gt;\r\n2、不断完善公司薪酬福利政策，确保员工得到相应保障。&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n公司通过制定和完善相关薪酬福利政策，提供与员工价值和劳动成果相称的报&lt;br /&gt;\r\n酬，为保障员工生活需要及个人价值实现提供充分的支持。在按时保质保证员工基&lt;br /&gt;\r\n本薪酬同时，公司自觉遵守国家劳动法规，严格遵守新《劳动法》并按照有关法律&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n法规的规定，与所有员工签订《劳动合同》。足额为员工缴纳养老、医疗、生育、工&lt;br /&gt;\r\n伤、失业等各项保险，特别针对工程技术人员和营销人员等关键经营岗位实施激励&lt;br /&gt;\r\n政策，鼓励人才技能和知识潜能的开发，保障高端人才智力体现。公司通过各种福&lt;br /&gt;\r\n利计划的实施，不断为员工提高生活质量、安全的生产环境，切实维护员工的切身&lt;br /&gt;\r\n合法利益。&amp;nbsp;&lt;br /&gt;\r\n3、持续开展系列主题文化节活动，活跃团队氛围，增强全员凝聚力。&amp;nbsp;&lt;br /&gt;\r\n公司通过多次开展文艺、体育类文化活动，一方面为员工个人才艺展示搭建广&lt;br /&gt;\r\n阔舞台，同时进一步活跃团队氛围，增强全员向心力与凝聚力，持续将企业文化建&lt;br /&gt;\r\n设工作推向深入。同时积极组织公司员工参加吉林市及公司内部举行的各类体育活&lt;br /&gt;\r\n动，如足球、篮球、排球、乒乓球等。通过参加各类文体活动，使员工身心得到放松，&lt;br /&gt;\r\n增加了情感交流，展现了员工健康向上的精神风貌，培育出高忠诚度和强执行力的员&lt;br /&gt;\r\n工团队，为企业发展提供不竭动力。多年来，公司以救助、助学及济困等多种形式在&lt;br /&gt;\r\n公益慈善活动中无私奉献。&amp;nbsp;&lt;br /&gt;\r\n（二）安全生产管理&amp;nbsp;&lt;br /&gt;\r\n公司一直秉承“把爱心洒满人间“的企业文化，把员工的生命和健康放到企业&lt;br /&gt;\r\n发展的第一位，始终以《安全生产法》、《职业病防治法》等国家法规为依据，深入&lt;br /&gt;\r\n细致的按照《吉林省安全生产条例》、《作业场所职业健康监督管理暂行规定》等进&lt;br /&gt;\r\n行落实，提高全体员工的职业健康安全意识，承担应尽的社会责任，多年来一直无&lt;br /&gt;\r\n重大伤亡事故、无职业病发生案例，连续16年被吉林市人民政府评为安全生产先进&lt;br /&gt;\r\n单位。&amp;nbsp;&lt;br /&gt;\r\n1、全面落实安全责任，承担生产经营单位的安全主体责任。&amp;nbsp;&lt;br /&gt;\r\n（1）设置安全管理机构，加强安全专业队伍建设。&amp;nbsp;&lt;br /&gt;\r\n根据《安全生产法》和《吉林省安全生产条例》的要求，公司设立安全管理组&lt;br /&gt;\r\n织机构安全保卫部，设置专职安全管理人员21名，其中国家注册安全工程师3人，&lt;br /&gt;\r\n国家二级安全评价师1人，工信厅安全专家1人，90%的人员具有大专以上学历，98%&lt;br /&gt;\r\n的人员从事安全管理工作5年以上，各现场生产部门均配置了专职安全管理人员。&amp;nbsp;&lt;br /&gt;\r\n（2）建立岗位安全责任制，将安全责任落实到人、到岗。&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n公司以文件的形式，规定了各部门的安全职责，各部门通过岗位说明书的形式&lt;br /&gt;\r\n规定了每个岗位的安全职责，并通过培训和宣贯使所有的员工熟知自己的岗位安全&lt;br /&gt;\r\n职责。其次，对于每年的安全生产责任目标，坚持以“安全包保合同的方式”层层&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n落实，公司对部门、部门对班组、班组对个人签订安全包保合同，并对合同的完成&lt;br /&gt;\r\n的情况进行月和年绩效评比，在全公司范围内形成“安全生产、人人有责”。&amp;nbsp;&lt;br /&gt;\r\n2、以科学的态度、先进的理念，提升安全管理水平。&amp;nbsp;&lt;br /&gt;\r\n作为高新技术企业，公司引进了更为先进的安全管理思路和模式——&lt;br /&gt;\r\nOHSAS18001职业健康安全管理体系，同时还建立起符合体系运作要求的管理文件，&lt;br /&gt;\r\n使公司的安全管理工作不断提高和完善。&amp;nbsp;&lt;br /&gt;\r\n公司在安全管理模式上进行更新和引进的同时，也在安全理念方面，提出了“零&lt;br /&gt;\r\n风险”的安全理念，就是通过深入细致的危险源辨识、评价和控制，将某项操作、&lt;br /&gt;\r\n某台设备的风险降低到可允许接受的程度，将危险进行提前控制和预防，从而达到&lt;br /&gt;\r\n零风险的目标。&amp;nbsp;&lt;br /&gt;\r\n3、夯实安全基础工作，保证安全工作制度化，常态化。&amp;nbsp;&lt;br /&gt;\r\n（1）完善的安全生产管理制度&amp;nbsp;&lt;br /&gt;\r\n公司针对电子行业的生产特点和危险源特点，结合消防安全、危险化学品安全、&lt;br /&gt;\r\n机械安全、特种设备安全的要求，在安全管理方面形成了三个层次的文件，即：安&lt;br /&gt;\r\n全管理手册、安全管理程序、安全操作规程和安全操作法、部门级安全制度等，并&lt;br /&gt;\r\n通过文件的培训和宣贯使全体员工严格执行。&amp;nbsp;&lt;br /&gt;\r\n（2）细致的安全管理档案&amp;nbsp;&lt;br /&gt;\r\n为能够有效的分析并指导安全工作，公司建立了完善的安全管理档案，主要包&lt;br /&gt;\r\n括①全公司危险作业场所和重点部位档案。②特殊工种作业人员档案。③危险作业&lt;br /&gt;\r\n岗位人员档案。④有毒有害作业岗位人员档案。⑤防火档案。⑥安防设施档案。⑦&lt;br /&gt;\r\n安全培训档案。⑧安全检查档案。⑨安全隐患整改档案，并设有专人管理，及时更&lt;br /&gt;\r\n新和补充。&amp;nbsp;&lt;br /&gt;\r\n（3）充分利用各种渠道，全面开展安全培训和宣传教育活动。&amp;nbsp;&lt;br /&gt;\r\n针对全体员工的日常安全培训、特种作业人员的专项培新、各层管理人员的法&lt;br /&gt;\r\n制培训，公司从细化安全培训内容入手，重新完善了安全培训制度，对安全培训工&lt;br /&gt;\r\n作提出了新的要求，培训频次增多、培训内容多样化、强调培训效果的验证，并且&lt;br /&gt;\r\n充分利用班前班后会，以现场培训为主，调动员工参与安全培训的热情，以此提高&lt;br /&gt;\r\n员工的安全意识。&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n另一方面，公司又以“春防、冬防、安全生产月”活动为契机，突出教育员工&lt;br /&gt;\r\n生产防火知识、家居和公共场所防火安全、火灾事故中的灭火技能和逃生常识，并&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n以宣传板报的形式进行培训。每年我们均组织各部门进行消防演习、疏散演练、紧&lt;br /&gt;\r\n急避险训练等活动，以此提高全体员工的安全意识。&amp;nbsp;&lt;br /&gt;\r\n（4）建立纵横交错的安全检查网络。&amp;nbsp;&lt;br /&gt;\r\n公司一直坚持 “四级”安全检查制，特别突出日常检查和重点时段检查的结合、&lt;br /&gt;\r\n专项检查和日常检查相结合。特别是节假日期间和夜间，公司更是加大检查的力度&lt;br /&gt;\r\n和频次，重点对设备危险因素、人员违章操作以及管理方面的缺陷进行检查，另外，&lt;br /&gt;\r\n公司更突出对重点部位和重点人员的检查和监督，并针对不同的部位建立检查表，&lt;br /&gt;\r\n有目的有针对性地实施检查。&amp;nbsp;&lt;br /&gt;\r\n（5）加大整改力度，重点突出安全隐患治理行动。&amp;nbsp;&lt;br /&gt;\r\n公司定期开展安全生产隐患的排查工作，以“查不出隐患才是最大的隐患”为&lt;br /&gt;\r\n指导思想，深入生产现场，提高排查频次，对查出的问题能现场整改的当场解决，&lt;br /&gt;\r\n不能整改的责令被查单位限期整改，对问题特别严重且已危及到人身安全的设备下&lt;br /&gt;\r\n达停产通知，什么时间问题解决掉，什么时候才允许生产。&amp;nbsp;&lt;br /&gt;\r\n公司不断加强安全隐患排查的深度和力度，调动所有职能部门，结合其管理职&lt;br /&gt;\r\n能进行隐患的排查，设备部门组织设备方面的排查，生产部门组织生产现场和操作&lt;br /&gt;\r\n方面的排查，基建部门组织扩建项目工地的排查，并调动工程技术人员更深层次的&lt;br /&gt;\r\n对工艺、操作方法、设备等方面进行细致全面的排查，根据排查出的问题进行整改。&lt;br /&gt;\r\n同时将排查出的隐患进行分类归纳，总结出目前安全问题存在的具体环节，为公司&lt;br /&gt;\r\n开展下一步安全工作的重点方向。&amp;nbsp;&lt;br /&gt;\r\n4、进一步做好员工职业健康管理工作，创建舒适的工作环境&amp;nbsp;&lt;br /&gt;\r\n（1）定期进行工作环境职业健康监测和员工健康体检。&amp;nbsp;&lt;br /&gt;\r\n公司每年都要聘请具有资质的职业健康监测部门，对所有的作业环境进行职业&lt;br /&gt;\r\n危害监测，使所有的部位均达到国家职业卫生控制标准。同时，公司每年定期组织&lt;br /&gt;\r\n员工进行职业健康体检，并为每名员工建立健康档案，及时了解员工身体健康情况。&lt;br /&gt;\r\n同时，根据生产环境不同，为员工分别配备符合国家技术标准的个人劳动保护用品&lt;br /&gt;\r\n和应急救援设施，特别是在劳动保护用品的配备时，充分考虑到员工佩戴时是否方&lt;br /&gt;\r\n便工作及舒适，努力为员工创造出良好的工作环境。&amp;nbsp;&lt;br /&gt;\r\n（2）加强从工艺、设备改造入手，从源头杜绝职业危害&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n对于存在生产现场影响员工身心健康的危害因素的控制，公司首先从工艺设计&lt;br /&gt;\r\n角度出发，尽量使用无污染、少污染的原材料，杜绝毒性大、污染重的原材料。其&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n次，为防止有害物质在生产车间内的散发，公司采用设备密封化、自动化、有害工&lt;br /&gt;\r\n序隔离、加大设备排风量等方式，并且安装泄漏报警装置，时时刻刻监测作业环境&lt;br /&gt;\r\n有害物质的含量。&amp;nbsp;&lt;br /&gt;\r\n六、节能减排与环境保护&amp;nbsp;&lt;br /&gt;\r\n公司一直坚持“绿色生产，杜绝污染”的环境理念，认真贯彻落实国家法律、&lt;br /&gt;\r\n法规，坚持以科学发展观为指导，以ISO14001环境管理体系及QC080000有害物质&lt;br /&gt;\r\n过程管理体系为手段，强化环保目标责任制，削减污染物的排放，未发生过一起环&lt;br /&gt;\r\n境污染事件，取得了当地政府及周边居民的赞誉。在下步工作中，公司将全面推进&lt;br /&gt;\r\n清洁生产和节约生产，以创建资源节约型和环境友好型企业，保护人类生存的环境，&lt;br /&gt;\r\n实施可持续发展战略。&amp;nbsp;&lt;br /&gt;\r\n1、完善环保管理网络，加强责任制建设&amp;nbsp;&lt;br /&gt;\r\n2012年初，根据上级环保部门要求，结合公司实际情况，制定了2012年度环境&lt;br /&gt;\r\n保护工作目标任务，设立了专门的环境管理机构，配备了专职环保负责人，充实了&lt;br /&gt;\r\n各级兼职环管理人员，进一步明确了各级领导、各个部门以及员工的环境保护责任。&amp;nbsp;&lt;br /&gt;\r\n2、建立、健全环境管理制度&amp;nbsp;&lt;br /&gt;\r\n公司建立了环境管理体系，完善各项环境卫生管理制度，认真强化从采购、储&lt;br /&gt;\r\n运、生产、销售各个环节的事故防范和应急措施，完成环境事故应急预案的编制并&lt;br /&gt;\r\n报市局备案。&amp;nbsp;&lt;br /&gt;\r\n按照ISO14001体系的要求，公司建立了《环境管理程序》、《废弃物管理制度》&lt;br /&gt;\r\n等一系列环境保护的相关制度，并对公司范围内的环境影响因素进行识别，共识别&lt;br /&gt;\r\n出环境影响因素396项，重大环境因素24项，同时逐项制定了控制措施。&amp;nbsp;&lt;br /&gt;\r\n3、依法执行新、改、扩建项目“三同时”&amp;nbsp;&lt;br /&gt;\r\n公司项目按国家环保有关法律法规要求，进行了环境影响评价，工程相应的环&lt;br /&gt;\r\n保设施与主体工程同时设计、同时施工、同时投入生产和使用。项目施工结束投产&lt;br /&gt;\r\n前，公司严格按照法律法规的要求进行环保竣工验收。&amp;nbsp;&lt;br /&gt;\r\n4、加强宣传、培训工作，强化员工环保意识&amp;nbsp;&lt;br /&gt;\r\n2012年公司以“4〃22”地球日、“6〃5”世界环境日、节能减排宣传周为契机，&lt;br /&gt;\r\n广泛开展了环保宣传工作，制作了环保宣传站牌、橱窗2处，利用网络向全体员工&lt;br /&gt;\r\n发放家庭环保小常识以及环保宣传手册，强化员工的环境保护意识。&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n5、强化监管，认真组织各类专项行动&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n（1）公司针对特征污染物均配置了国际先进水平的在线监测设备和所有污染&lt;br /&gt;\r\n物的实验室监测设备，并实现处理工艺自动控制。通过合理内部合理频次的管理监&lt;br /&gt;\r\n测，监督合格排放，并在吉林市环保局的月污染物的监测督导下，全部达标排放。&amp;nbsp;&lt;br /&gt;\r\n（2）按照上级环保部门环保工作要求，结合公司《环境管理程序》规定，不&lt;br /&gt;\r\n断强化环保检查力度，巩固以岗位班组、部门、公司三级环保排查治理网络，对已&lt;br /&gt;\r\n发现的不符合项坚决进行治理，做到了早发现、早解决。持续做好生产现场的环境&lt;br /&gt;\r\n保护工作，2012年的问题整改率为100%。&amp;nbsp;&lt;br /&gt;\r\n（3）完善环保处理工艺，保证环保设施运行稳定，确保污染物处理达标。公&lt;br /&gt;\r\n司对污染物的处理工艺，严格按照国家环境政策和法规的要求，进行环境影响评价&lt;br /&gt;\r\n和环境项目竣工验收，不断进行完善和改进，目前对于废水处理已经具备二级化学&lt;br /&gt;\r\n沉淀法、中和沉淀法，去除效率达到97%以上，对于锅炉烟气处理采用SS型双级湿&lt;br /&gt;\r\n法除尘脱硫组合装置，可达到脱硫效率70～90%、除尘效率96～99%以上的效能。&amp;nbsp;&lt;br /&gt;\r\n6、积极开展本企业污染源普查工作&amp;nbsp;&lt;br /&gt;\r\n为积极响应政府部门号召，做好配合工作，同时也全面掌握公司各类污染源的&lt;br /&gt;\r\n数量、排放量、排放去向、污染治理设施运行状况、污染治理水平等情况。根据市&lt;br /&gt;\r\n局统一部署，公司污染源普查统计小组，对公司生产及相关部门各项数据进行统计、&lt;br /&gt;\r\n审核、登记并上报，为公司的环境质量改善提供依据，按时、保质完成市局要求的&lt;br /&gt;\r\n污染源普查数据上报工作。&amp;nbsp;&lt;br /&gt;\r\n7、高度重视，切实做好污染减排&amp;nbsp;&lt;br /&gt;\r\n公司按照政府对污染减排工作的总体部署和要求，重组减排领导小组，加强领&lt;br /&gt;\r\n导，及时传达上级要求，精心部署、细化目标，大力宣传，注重监管，增强实效，&lt;br /&gt;\r\n定期召开污染减排专项工作会议，全面部署落实各项污染物减排工作，公司减排工&lt;br /&gt;\r\n作取得了一定的成效，公司废水排放量同比下降10％，COD排放量同比下降12％。&amp;nbsp;&lt;br /&gt;\r\n七、公共关系和社会公益事业&amp;nbsp;&lt;br /&gt;\r\n（一）提供就业岗位&amp;nbsp;&lt;br /&gt;\r\n随着公司的发展和经营规模的逐步扩大，公司每年都向社会积极提供就业岗位，&lt;br /&gt;\r\n为社会和谐稳定创造条件。2012年公司招聘大中专毕业生 125 人（其中研究生2&lt;br /&gt;\r\n人，本科生52人），从社会招工录用61人。&amp;nbsp;&lt;br /&gt;\r\n（二）依法缴纳税费&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n公司积极支持国家财政税收和地方经济建设，依法缴纳各类税费。2012年，公&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n司在宏观经济持续低迷，行业竞争更加激烈的情况下，累计缴纳各项税费达4595.43&lt;br /&gt;\r\n万元，为促进地方经济发展和社会进步做出了重要贡献。&amp;nbsp;&lt;br /&gt;\r\n（三）社会公益事业&amp;nbsp;&lt;br /&gt;\r\n公司在经营自身业务的同时，不忘回馈社会，热心关注并支持公益事业，公司&lt;br /&gt;\r\n在制定年度费用预算时把公益事业支持费用纳入财务预算，制定了公益事业支持规&lt;br /&gt;\r\n划。多年来，公司在力所能及的范围内对当地的教育、文体、环保、慈善等公益事&lt;br /&gt;\r\n业勇于承担，大力支持。2012年，响应市人大“关爱困难家庭”的号召，向市慈善&lt;br /&gt;\r\n总会捐款10万元；为市慈善救助“双日捐”活动，向市慈善总会捐款3万元。&amp;nbsp;&lt;br /&gt;\r\n2013年，公司将进一步强化企业社会责任理念，继续坚持以人为本，强化对股&lt;br /&gt;\r\n东、员工、客户、供应商、社会环境等相关方的权益保护，坚持科技创新、节能降&lt;br /&gt;\r\n耗，一如既往的承担应尽的社会责任，不断的提升企业价值，注重诚信经营和商业&lt;br /&gt;\r\n道德。公司在追求经济效益的同时，根据实际情况，不断完善公司社会责任管理体&lt;br /&gt;\r\n系建设，不断探索有效履行社会责任的着力点，积极关注公益事业、环境保护和资&lt;br /&gt;\r\n源的可持续利用，为促进社会和谐及公司可持续发展作出更大的贡献。&amp;nbsp;&lt;br /&gt;\r\n吉林华微电子股份有限公司&amp;nbsp;&lt;br /&gt;\r\n2013年4月25日&amp;nbsp;\r\n&lt;/p&gt;', '2013-05-04', 'published', '15', null, '2013-05-04 21:25:08', '0');
INSERT INTO `cj_article` VALUES ('16', '使用奥地利微电子AS3911的支付终端获得EMV认证', '1', 'RFID世界网', '&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	使用奥地利微电子AS3911阅读器芯片的新款非接触式支付终端获得EMV认证，NBS支付方案系统使用高度集成的AS3911芯片来读取EMV卡(万事达卡、PayPass卡和 Visa payWave卡)。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	高性能模拟IC和传感器供应商奥地利微电子公司宣布NBS支付方案使用奥地利微电子AS3911阅读器芯片的一系列新支付终端获得EMV认证。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	NBS支付方案(NBSPS)的510和710系列NOIRE终端现可使用具有万事达、PayPass和 Visa payWave标志的非接触式卡接受支付。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	NBSPS终端内的AS3911 RFID阅读器芯片具有射频和模拟前端，可读取满足EMV标准要求的任何非接触式支付卡。由奥地利微电子开发的参考设计，与最先进的非接触式支付系统非常类似，为希望生产满足EMV认证终端的制造商提供现成的蓝图。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	由于AS3911具有高(1W)射频差分输出功率和集成的EMV特殊错误处理功能，该芯片目前被包括NBSPS在内的许多终端制造商使用。这些特性提供灵活和改进的电路设计，无需外部射频升压电路。这降低了制造商的材料成本，相比更低输出功率的竞争品牌的阅读器芯片，能加快设计进程并缩短上市时间。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	NBS 支付方案业务发展副总裁Richard Gooderham表示：“新的NOIRE支付终端在RFID卡阅读方面的要求与奥地利微电子的阅读器芯片AS3911完美匹配。AS3911的高输出功率帮助支付终端取得EMV认证，而竞争品牌的产品无法满足。更重要的是，奥地利微电子独一无二的技术支持使阅读器的集成更为快速、顺畅。”\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	奥地利微电子RFID/NFC高级市场经理Mark Dickson表示：“NBS支付方案成功地推出了新的NOIRE支付终端，证明使用AS3911阅读器芯片能快速、可靠地应用EMV兼容的非接触式支付接口。”(RFID世界网编辑整理)\r\n&lt;/p&gt;', '2013-05-04', 'published', '15', null, '2013-05-04 22:28:07', '0');
INSERT INTO `cj_article` VALUES ('17', '棋港电子正式成为圣邦微电子授权代理商', '1', '', '&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	近日，圣邦微电子有限公司与棋港电子有限公司正式签订产品代理协议，棋港开始全线推广销售圣邦的各类产品。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	棋港成立于1983年，至今已经过了20多年的发展历程。该公司客户基础雄厚，销售网络健全。为了更好的服务于不同行业的客户，为客户提供专业的技术支持（例如为客户提供 TOTAL SOLUTION），棋港专门针对具体市场，成立了多个市场事业部。相信凭借棋港的专业实力，必将对圣邦产品的进一步推广起到极大的促进作用。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	关于棋港\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	棋港电子有限公司于1983年在香港成立，公司成立的初期以经营电子元器件配套和进出口业务为主，经过多年的发展，现在已拥有了自身的设计和技术，并自行开发了多个应用方案。棋港在北京、南京、上海、广州、深圳设立了多个办事处，不仅在国内建立了庞大的客户网络，在国外也赢得了良好的声誉，曾于2005年获得“最佳中国区代理商”奖。\r\n&lt;/p&gt;', '2013-05-04', 'published', '15', null, '2013-05-04 22:28:53', '0');
INSERT INTO `cj_article` VALUES ('18', '中国微电子异动 升逾两成', '1', '', '        &lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	中国微电子[-6.34%](00139)今日出现异动，盘中现报0.218港元，升24.57%，暂成交29万股，涉资5.8万港元。&lt;span id=&quot;__kindeditor_bookmark_end_9__&quot;&gt;&lt;/span&gt;\r\n&lt;/p&gt;\r\n      ', '2013-05-04', 'published', '15', '2013-05-04 22:30:16', '2013-05-04 22:29:35', '0');
INSERT INTO `cj_article` VALUES ('19', '中医艾灸有了新招——微电子艾灸仪', '1', '', '        &lt;p style=&quot;font-family:宋体;font-size:14px;background-color:#FFFFFF;&quot;&gt;\r\n	中医认为：艾灸具有通经活络、行气活血、祛湿逐寒、消肿散结、扶阳固脱、回阳救逆、防病保健等作用。鹊牌电子灸治疗仪根据中医艾灸机理，结合现代微电子、热、磁技术，标准化生产，产品质量性能稳定，可实现直接、间接、温计等灸法，具有多穴同灸、智能温控、无烟无火、定向艾灸等特点，适用于中医人体穴位艾灸治疗，是中医艾灸现代化的精品。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-family:宋体;font-size:14px;background-color:#FFFFFF;&quot;&gt;\r\n	　　“大艾普及”爱心发放\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-family:宋体;font-size:14px;background-color:#FFFFFF;&quot;&gt;\r\n	　　鹊牌艾灸仪获得了国家发明、新型实用双专利，改进了传统方法烟熏火燎、易烫伤、不便操作的缺点。今年，特别推出“大艾普及”社会关爱活动——凡是急需艾灸仪的慢性病患者，只需付2盒艾灸芯片的成本，就可领取一台价值1980元的鹊牌艾灸仪(每枚艾灸片相当于5支艾条、艾柱)。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-family:宋体;font-size:14px;background-color:#FFFFFF;&quot;&gt;\r\n	　　郑重声明：质量一律三包！免费热线：400-8508 007(全国货到付款)\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-family:宋体;font-size:14px;background-color:#FFFFFF;&quot;&gt;\r\n	　　全国统一市价：1980元/台，现在爱心发放。益生良行官网：www.yishenglianghang.com\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-family:宋体;font-size:14px;background-color:#FFFFFF;&quot;&gt;\r\n	　　国家发明专利：ZL2010.1 0241829.2国家实用新型专利：ZL2010.2 0277334.0苏食药监械生产许2010-0030号苏食药监械(准)字2012第2270411号苏医械广审(文)第2012120208号禁忌内容和注意事项详见说明书，请仔细阅读产品说明书或在医务人员指导下购买或使用，苏州工业园区为真生物医药科技有限公司。\r\n&lt;/p&gt;\r\n      ', '2013-05-04', 'published', '15', '2013-05-04 22:30:30', '2013-05-04 22:29:58', '0');
INSERT INTO `cj_article` VALUES ('20', '华微电子以自主品牌保持竞争优势', '1', '', '&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	中国证券网讯（记者 王伟丽）&amp;nbsp;华微电子2012年度报告显示实现营业收入105506.73万元，同比下降3.92%；实现归属于上市公司股东净利润4291.67万元，同比下降57.82 %。每股收益0.06元，比上年同期下降60%。&lt;br /&gt;\r\n　　公司解释营业收入下降的原因是因为2012年全球经济环境持续低迷，半导体市场竞争加剧。虽然经过努力公司产品销量在保持原有市场份额的基础上取得了一定的增长，但是抵不过产品价格的下降。&lt;br /&gt;\r\n　　据分析，虽然宏观环境不佳，但是公司自主研发的产品对提高市场占有率及销售收入发挥了积极作用。中国半导体企业随着自身技术及工艺平台的不断升级，目前已进入半导体行业的中、高端领域，产品更新速度较快，华微电子根据市场需求及自身资源进行新产品的研究开发保持了竞争优势。公司全力推进的IGBT、MOSFET系列化产品具有较强的竞争力。其中，自主创新研发的JTE工艺使产品性能进一步优化、产品成本更具竞争优势；IGBT产品以及改进后的可控硅产品产生了一批较大的应用客户群；第三代MOSFET产品和TRENCH工艺平台在市场上得到了较高的认可度；产品因性价比较高受到了客户的欢迎。&lt;br /&gt;\r\n　　同日公布的一季报显示，归属于母公司所有者的净利润较上年同期数增加4962262.04元，增加比例68.7%，这主要是因为公司的营业收入在增加、产能利用率在不断提升。这说明公司盈利能力在不断增强，2013年公司将在市场增量、新器件增量、新领域增量方面有优异的表现。\r\n&lt;/p&gt;', '2013-05-04', 'published', '15', null, '2013-05-04 22:31:30', '0');
INSERT INTO `cj_article` VALUES ('21', '芯片巨头英特尔换帅', '1', '', '&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	前天晚间，全球最大的PC（个人电脑）芯片厂商英特尔宣布，公司董事会已一致选举布莱恩·克兰尼克(BrianKrzanich)为新任CEO，接替现任CEO保罗·欧德宁(PaulOtellini)。克兰尼克将在5月16日的英特尔年度股东大会上正式出任CEO。&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	克兰尼克现年52岁，自1982年加入英特尔以来担任了英特尔一系列技术和领导职位，自2012年1月开始担任英特尔首席运营官（COO），他将成为英特尔历史上第六任CEO。根据英特尔此前宣布的消息，欧德宁将于5月16日卸任英特尔CEO及董事会成员的职务。英特尔董事长安迪·布莱恩特(Andy&amp;nbsp;Bryant)表示：“在经过彻底而深思熟虑的选择过程后，董事会很高兴克兰尼克能够领导英特尔。我们正在定义并发明下一代技术，这将推动未来计算机的发展。”&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	此外，英特尔同时宣布，董事会还选举了现年48岁的蕾妮·詹姆斯(ReneeJames)为英特尔总裁，她也将于5月16日出任这一新职位，与克兰尼克一同加入英特尔执行办公室。受此消息影响，英特尔股价当天微涨0.50％，收于每股24.11美元。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	■解读换帅透露保守风格\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	英特尔的CPU与微软的操作系统Windows组成的“Wintel”构架联盟统治了PC行业将近二十年，英特尔也成为全球最大的PC芯片厂商。但是随着近两年来智能手机、平板电脑等移动互联行业的兴起，PC行业逐渐式微。&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	电脑销售量持续下滑使得生产电脑芯片的英特尔业绩遭遇挑战，其在2012年净利润下滑15%，今年第一季度净利润更是大幅下滑25%。&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	去年11月，英特尔宣布欧德宁将于今年退休，并且透露不排除从公司外部选出新CEO。外界普遍认为如能空降CEO意味着英特尔将进行大刀阔斧的改革。不过此次克兰尼克的内部上位，让外界普遍质疑英特尔在遭遇业绩困境时改革决心不足。中国移动互联网产业联盟常务副理事长兼秘书长李易指出，欧德宁在位8年，曾经提出著名的摩尔定律的英特尔逐渐趋向保守，不仅错失了移动互联的机会，即便推出了补救措施——“超极本”战略也收效甚微。新任CEO必须改变英特尔在智能手机等移动芯片领域几乎可以忽略不计的地位，不然的话，英特尔必将随着PC行业继续沉沦。\r\n&lt;/p&gt;', '2013-05-04', 'published', '15', null, '2013-05-04 22:32:50', '0');
INSERT INTO `cj_article` VALUES ('22', '英特尔新任CEO：加速向移动芯片转移', '1', '', '&lt;p style=&quot;font-size:14px;font-family:宋体, simsun, sans-serif, Arial;background-color:#FFFFFF;&quot;&gt;\r\n	北京时间5月4日消息，英特尔下任CEO布莱恩•卡扎尼奇（Brian Krzanich）表示，他已向公司董事会力陈加速转移至移动设备芯片的计划。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;font-family:宋体, simsun, sans-serif, Arial;background-color:#FFFFFF;&quot;&gt;\r\n	　　他面对更大的挑战是：说服投资人与顾客，消费者转而青睐平板与智能手机，逐渐舍弃英特尔主宰的个人计算机（PC）市场，在此方面，他可以前CEO欧德宁（Paul Otellini）做得更好。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;font-family:宋体, simsun, sans-serif, Arial;background-color:#FFFFFF;&quot;&gt;\r\n	　　16日，卡扎尼奇将成为英特尔第6任CEO，他指出：“接下来几个月你将看到一些行动，这些措施将开始呈现我们的策略。”他说，他很快就会向公司同仁提出计划轮廓，之后再公开说明。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;font-family:宋体, simsun, sans-serif, Arial;background-color:#FFFFFF;&quot;&gt;\r\n	　　移动芯片市场规模达854亿美元，高通领先群雄，英特尔难以望其项背。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;font-family:宋体, simsun, sans-serif, Arial;background-color:#FFFFFF;&quot;&gt;\r\n	　　旧金山JMP证券公司（JMP Securities LLC）分析师高纳（Alex Gauna）表示：“这是新的考验，而他（卡扎尼奇）是英特尔的老鸟。这是新的战役、新的游戏，我们必须观察卡扎尼奇能否适应新规则。”\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;font-family:宋体, simsun, sans-serif, Arial;background-color:#FFFFFF;&quot;&gt;\r\n	　　1968年成立以来，英特尔擅长的策略是，采用尖端技术制造比对手更快速、功能更强大的芯片。加拿大皇家银行资本市场公司（RBC Capital Markets）分析师傅利曼（Doug Freedman）表示，英特尔一直倾向于投资最先进的工厂与设备，用于服务器和PC半导体生产，而不是移动设备。傅利曼说，英特尔明年才可能转变方针。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;font-family:宋体, simsun, sans-serif, Arial;background-color:#FFFFFF;&quot;&gt;\r\n	　　傅利曼指出：“英特尔仍未把自身精锐摆在移动设备上面。”\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;font-family:宋体, simsun, sans-serif, Arial;background-color:#FFFFFF;&quot;&gt;\r\n	　　10多年来，英特尔已投入数十亿美元试图在智能手机市场抢得一席之地，不过使用ARM技术的芯片市占率仍超过95%。高通在手持设备半导体市场仍是霸主。直到去年结束时，英特尔在手机微处理器市场的占有率仍不到1%。\r\n&lt;/p&gt;', '2013-05-04', 'published', '15', null, '2013-05-04 22:33:18', '0');
INSERT INTO `cj_article` VALUES ('23', '同方国芯子公司获银联卡芯片产品安全认证证书', '1', '', '        &lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	同方国芯（002049.SZ）5月2日晚公告称，近日公司全资子公司北京同方微电子有限公司收到银联标识产品企业资质认证办公室颁发的《银联卡芯片产品安全认证证书》（试点）。证书有效期为三年，自2013年4月26日至2016年4月25日。&lt;br /&gt;\r\n&lt;br /&gt;\r\n　　经审核，同方微电子以及该公司设计的集成电路产品，符合《银联卡芯片安全规范》，授予其银联卡芯片（集成电路）设计企业资质。&lt;br /&gt;\r\n&lt;br /&gt;\r\n　　公司称，这表明同方微电子具备了银联卡芯片产品的生产资质，THD86芯片成为中国银联允许用于银联芯片卡的首款双界面CPU卡芯片产品。&lt;br /&gt;\r\n&lt;br /&gt;\r\n　　同方国芯2日报收28.75元，上涨4.81%。\r\n&lt;/p&gt;\r\n      ', '2013-05-04', 'published', '15', '2013-05-04 22:34:33', '2013-05-04 22:33:54', '0');
INSERT INTO `cj_article` VALUES ('24', 'iPhone5S处理器仍为三星造台积电明年接手', '1', '', '        &lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	报道称，台积电目前已经开始改造工作，以适应承接苹果Ax处理器订单的压力。报道表示，在2013年底台积电将完成准备工作，将使用20纳米技术，为苹果生产iPhone6用的处理器。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	报道指出，苹果下一代iPhone(5S)，将仍然由三星生产。iPhone5、iPhone4S等现款处理器的生产工作，也将由三星生产，台积电只负责未来新款处理器的生产工作。\r\n&lt;/p&gt;\r\n      ', '2013-05-04', 'published', '15', '2013-05-04 22:36:30', '2013-05-04 22:35:33', '0');
INSERT INTO `cj_article` VALUES ('25', '台积电赢了！明年iPhone处理器全部拿下', '1', '凤凰网', '        &lt;img src=&quot;/meelab2/upload/image/20130523205332_93847/IMG_4457.jpg&quot; alt=&quot;&quot; /&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	为了摆脱三星电子，苹果一直基于将处理器外包给其它代工厂，最理想的当然就是台积电，但是也不断有消息称Intel会强势介入。现在，至少iPhone上已经没有任何悬念了，业内消息称苹果已经将2014年款iPhone所用处理器的代工全部交给了台积电。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	为了吸引苹果并满足其庞大需求，台积电早早就投入巨资，2012年4月破土动工开始了Fab 14晶圆厂第五阶段的扩建工作，11月举行了上梁仪式，将在2013年底具备量产能力，正好赶上苹果的步调。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	有消息称，Fab 14第五阶段动工之后还不到一年，就开始迁入、安装设备了，进展速度惊人。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	台积电此前还披露说，Fab 14第五阶段将会是其第二座具备20nm工艺生产能力的晶圆厂。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	Fab 14的第六阶段也在去年年底动工建设，预计2014年底到2015年初投入量产，并直接上马16nm工艺，这同样被普遍视为是专门为苹果准备的。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	不过苹果也不可能一夜之间就甩掉三星，据称下半年发布的新款iPhone就会继续使用三星造的处理器。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	至于iPad上的处理器，现在还没有更多说法，看这样子短期内仍要依仗三星。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	为了摆脱三星电子，苹果一直基于将处理器外包给其它代工厂，最理想的当然就是台积电，但是也不断有消息称Intel会强势介入。现在，至少iPhone上已经没有任何悬念了，业内消息称苹果已经将2014年款iPhone所用处理器的代工全部交给了台积电。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	为了吸引苹果并满足其庞大需求，台积电早早就投入巨资，2012年4月破土动工开始了Fab 14晶圆厂第五阶段的扩建工作，11月举行了上梁仪式，将在2013年底具备量产能力，正好赶上苹果的步调。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	有消息称，Fab 14第五阶段动工之后还不到一年，就开始迁入、安装设备了，进展速度惊人。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	台积电此前还披露说，Fab 14第五阶段将会是其第二座具备20nm工艺生产能力的晶圆厂。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	Fab 14的第六阶段也在去年年底动工建设，预计2014年底到2015年初投入量产，并直接上马16nm工艺，这同样被普遍视为是专门为苹果准备的。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	不过苹果也不可能一夜之间就甩掉三星，据称下半年发布的新款iPhone就会继续使用三星造的处理器。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	至于iPad上的处理器，现在还没有更多说法，看这样子短期内仍要依仗三星。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	为了摆脱三星电子，苹果一直基于将处理器外包给其它代工厂，最理想的当然就是台积电，但是也不断有消息称Intel会强势介入。现在，至少iPhone上已经没有任何悬念了，业内消息称苹果已经将2014年款iPhone所用处理器的代工全部交给了台积电。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	为了吸引苹果并满足其庞大需求，台积电早早就投入巨资，2012年4月破土动工开始了Fab 14晶圆厂第五阶段的扩建工作，11月举行了上梁仪式，将在2013年底具备量产能力，正好赶上苹果的步调。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	有消息称，Fab 14第五阶段动工之后还不到一年，就开始迁入、安装设备了，进展速度惊人。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	台积电此前还披露说，Fab 14第五阶段将会是其第二座具备20nm工艺生产能力的晶圆厂。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	Fab 14的第六阶段也在去年年底动工建设，预计2014年底到2015年初投入量产，并直接上马16nm工艺，这同样被普遍视为是专门为苹果准备的。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	不过苹果也不可能一夜之间就甩掉三星，据称下半年发布的新款iPhone就会继续使用三星造的处理器。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	至于iPad上的处理器，现在还没有更多说法，看这样子短期内仍要依仗三星。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n      ', '2013-05-04', 'published', '15', '2013-05-23 20:53:47', '2013-05-04 22:35:59', '0');
INSERT INTO `cj_article` VALUES ('26', '世界上功耗最低的DAB基带解码芯片', '1', '', '&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	世界上功耗最低的DAB基带解码芯片\r\n&lt;/p&gt;', '2013-05-23', 'published', '5', null, '2013-05-23 01:30:43', '0');
INSERT INTO `cj_article` VALUES ('27', '功耗最低的DAB基带解码芯片', '1', '', '&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	世界上功耗最低的DAB基带解码芯片\r\n&lt;/p&gt;', '2013-05-23', 'published', '5', null, '2013-05-23 01:31:53', '0');
INSERT INTO `cj_article` VALUES ('28', '数字多媒体接收终端', '1', '', '&lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	数字多媒体接收终端\r\n&lt;/p&gt;', '2013-05-23', 'published', '5', null, '2013-05-23 01:32:35', '0');
INSERT INTO `cj_article` VALUES ('29', '西安通视数字多媒体接收终端', '1', '', '        &lt;p style=&quot;text-indent:2em;&quot;&gt;\r\n	西安通视数字多媒体接收终端\r\n&lt;/p&gt;\r\n      ', '2013-05-23', 'published', '5', '2013-05-23 01:45:35', '2013-05-23 01:33:05', '0');
INSERT INTO `cj_article` VALUES ('30', '北京博锦科技', '1', '', '&lt;p style=&quot;vertical-align:baseline;&quot;&gt;\r\n	北京博锦科技\r\n&lt;/p&gt;', '2013-05-23', 'published', '5', null, '2013-05-23 01:33:34', '0');
INSERT INTO `cj_article` VALUES ('31', '科研方向', '1', '', '&amp;nbsp;', '2013-05-23', 'trash', '0', null, '2013-05-23 02:11:56', '0');
INSERT INTO `cj_article` VALUES ('32', '科研方向', '1', '', '&amp;nbsp;', '2013-05-23', 'trash', '0', null, '2013-05-23 02:13:29', '0');
INSERT INTO `cj_article` VALUES ('33', '科研方向', '1', '', '&amp;nbsp;', '2013-05-23', 'published', '3', null, '2013-05-23 02:15:18', '0');

-- ----------------------------
-- Table structure for `cj_category`
-- ----------------------------
DROP TABLE IF EXISTS `cj_category`;
CREATE TABLE `cj_category` (
  `cg_id` int(5) NOT NULL AUTO_INCREMENT,
  `cg_name` varchar(20) NOT NULL,
  `cg_type` varchar(10) NOT NULL,
  `cg_parent` int(5) NOT NULL DEFAULT '0',
  `cg_public` tinyint(1) NOT NULL DEFAULT '1',
  `cg_order` int(3) NOT NULL DEFAULT '0',
  `cg_show` int(1) NOT NULL DEFAULT '1' COMMENT '0：直接跳转到子类别\r\n1：只显示本类别内容\r\n2：显示本类别及其子类的内容',
  `cg_nav` int(1) NOT NULL DEFAULT '0',
  `cg_show_in_nav` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_category
-- ----------------------------
INSERT INTO `cj_category` VALUES ('1', '实验室介绍', 'page', '0', '1', '0', '1', '0', '1');
INSERT INTO `cj_category` VALUES ('2', '学术梯队', 'page', '0', '1', '0', '1', '0', '1');
INSERT INTO `cj_category` VALUES ('3', '科研方向', 'page', '0', '1', '0', '0', '0', '1');
INSERT INTO `cj_category` VALUES ('4', '人才培养', 'page', '0', '1', '0', '1', '0', '1');
INSERT INTO `cj_category` VALUES ('5', '成果转化', 'article', '0', '1', '0', '1', '0', '1');
INSERT INTO `cj_category` VALUES ('6', '交流合作', 'article', '0', '1', '0', '1', '0', '1');
INSERT INTO `cj_category` VALUES ('8', '本科生', 'page', '4', '1', '0', '1', '0', '1');
INSERT INTO `cj_category` VALUES ('9', '研究生', 'page', '4', '1', '0', '1', '0', '1');
INSERT INTO `cj_category` VALUES ('11', '电子系统和应用研究', 'page', '3', '1', '0', '1', '0', '1');
INSERT INTO `cj_category` VALUES ('12', '微电子技术基础研究', 'page', '3', '1', '0', '1', '0', '1');
INSERT INTO `cj_category` VALUES ('13', '集成电路芯片设计', 'page', '3', '1', '0', '1', '0', '1');
INSERT INTO `cj_category` VALUES ('14', '数字广播发布技术', 'page', '3', '1', '0', '1', '0', '1');
INSERT INTO `cj_category` VALUES ('15', '新闻动态', 'article', '0', '1', '0', '1', '1', '1');
INSERT INTO `cj_category` VALUES ('16', '通知公告', 'article', '0', '1', '0', '1', '1', '1');
INSERT INTO `cj_category` VALUES ('17', '资料下载', 'article', '0', '1', '0', '1', '1', '1');

-- ----------------------------
-- Table structure for `cj_file`
-- ----------------------------
DROP TABLE IF EXISTS `cj_file`;
CREATE TABLE `cj_file` (
  `f_id` int(20) NOT NULL AUTO_INCREMENT,
  `f_url` varchar(200) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `f_article` int(20) NOT NULL,
  `f_show_as_list` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`f_id`),
  KEY `f_article` (`f_article`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_file
-- ----------------------------
INSERT INTO `cj_file` VALUES ('3', '/meelab2/upload/file/20130523204920_75635/1.txt', '1.txt', '25', '1');

-- ----------------------------
-- Table structure for `cj_image`
-- ----------------------------
DROP TABLE IF EXISTS `cj_image`;
CREATE TABLE `cj_image` (
  `i_id` int(20) NOT NULL AUTO_INCREMENT,
  `i_url` varchar(200) NOT NULL,
  `i_description` text,
  `i_article` int(20) NOT NULL,
  `i_show_as_slider` int(1) NOT NULL DEFAULT '0',
  `i_show_as_cover` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`i_id`),
  KEY `i_article` (`i_article`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_image
-- ----------------------------
INSERT INTO `cj_image` VALUES ('1', '/upload/image/20130523013039_95256/图片1.png', '', '26', '1', '1');
INSERT INTO `cj_image` VALUES ('2', '/upload/image/20130523013134_17816/图片2.png', '', '27', '1', '1');
INSERT INTO `cj_image` VALUES ('3', '/upload/image/20130523013228_98629/图片3.png', '', '28', '1', '1');
INSERT INTO `cj_image` VALUES ('5', '/upload/image/20130523013325_23439/图片6.png', '', '30', '1', '1');
INSERT INTO `cj_image` VALUES ('6', '/upload/image/20130523013302_67159/图片4.jpg', '', '29', '1', '1');
INSERT INTO `cj_image` VALUES ('8', '/meelab2/upload/image/20130523205332_93847/IMG_4457.jpg', '', '25', '1', '1');

-- ----------------------------
-- Table structure for `cj_index_config`
-- ----------------------------
DROP TABLE IF EXISTS `cj_index_config`;
CREATE TABLE `cj_index_config` (
  `ic_id` int(5) NOT NULL AUTO_INCREMENT,
  `ic_category` int(5) NOT NULL,
  `ic_model` int(5) NOT NULL,
  `ic_width` int(1) NOT NULL,
  `ic_height` int(1) NOT NULL,
  `ic_order` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_index_config
-- ----------------------------
INSERT INTO `cj_index_config` VALUES ('13', '1', '1', '2', '1', '0');
INSERT INTO `cj_index_config` VALUES ('14', '3', '2', '1', '1', '0');
INSERT INTO `cj_index_config` VALUES ('15', '15', '1', '1', '1', '0');
INSERT INTO `cj_index_config` VALUES ('16', '16', '1', '1', '1', '0');
INSERT INTO `cj_index_config` VALUES ('17', '17', '1', '1', '1', '0');
INSERT INTO `cj_index_config` VALUES ('18', '5', '3', '3', '2', '0');

-- ----------------------------
-- Table structure for `cj_module`
-- ----------------------------
DROP TABLE IF EXISTS `cj_module`;
CREATE TABLE `cj_module` (
  `md_id` int(5) NOT NULL AUTO_INCREMENT,
  `md_key` varchar(30) NOT NULL,
  `md_name` varchar(30) NOT NULL,
  `md_order` int(3) NOT NULL DEFAULT '0',
  `md_parent` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`md_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_module
-- ----------------------------
INSERT INTO `cj_module` VALUES ('1', 'userMag', '用户管理', '1', '0');
INSERT INTO `cj_module` VALUES ('2', 'articleMag', '内容管理', '3', '0');
INSERT INTO `cj_module` VALUES ('3', 'user', '添加用户', '0', '1');
INSERT INTO `cj_module` VALUES ('4', 'userList', '用户列表', '0', '1');
INSERT INTO `cj_module` VALUES ('5', 'article', '添加文章', '1', '2');
INSERT INTO `cj_module` VALUES ('6', 'contentList', '内容列表', '0', '2');
INSERT INTO `cj_module` VALUES ('7', 'categoryMag', '类别管理', '2', '0');
INSERT INTO `cj_module` VALUES ('8', 'category', '添加类别', '0', '7');
INSERT INTO `cj_module` VALUES ('9', 'categoryList', '类别列表', '0', '7');
INSERT INTO `cj_module` VALUES ('10', 'moduleMag', '模块管理', '8', '0');
INSERT INTO `cj_module` VALUES ('11', 'serverInfo', '服务信息', '9', '0');
INSERT INTO `cj_module` VALUES ('12', 'page', '添加单页', '2', '2');
INSERT INTO `cj_module` VALUES ('13', 'album', '添加相册', '3', '2');
INSERT INTO `cj_module` VALUES ('14', 'video', '添加视频', '4', '2');
INSERT INTO `cj_module` VALUES ('15', 'qa', '添加问答', '5', '2');
INSERT INTO `cj_module` VALUES ('18', 'viewMag', '界面管理', '4', '0');
INSERT INTO `cj_module` VALUES ('19', 'indexConfig', '自定义首页', '0', '18');
INSERT INTO `cj_module` VALUES ('20', 'editPage', '自定义模版', '0', '18');

-- ----------------------------
-- Table structure for `cj_module_user`
-- ----------------------------
DROP TABLE IF EXISTS `cj_module_user`;
CREATE TABLE `cj_module_user` (
  `mu_id` int(10) NOT NULL AUTO_INCREMENT,
  `mu_module` int(10) NOT NULL,
  `mu_user` int(10) NOT NULL,
  PRIMARY KEY (`mu_id`),
  KEY `mu_user` (`mu_user`),
  KEY `mu_module` (`mu_module`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_module_user
-- ----------------------------
INSERT INTO `cj_module_user` VALUES ('1', '1', '2');
INSERT INTO `cj_module_user` VALUES ('2', '4', '2');
INSERT INTO `cj_module_user` VALUES ('3', '5', '2');
INSERT INTO `cj_module_user` VALUES ('4', '2', '2');
INSERT INTO `cj_module_user` VALUES ('5', '6', '2');
INSERT INTO `cj_module_user` VALUES ('6', '7', '2');
INSERT INTO `cj_module_user` VALUES ('7', '3', '2');
INSERT INTO `cj_module_user` VALUES ('8', '2', '3');
INSERT INTO `cj_module_user` VALUES ('9', '6', '3');
INSERT INTO `cj_module_user` VALUES ('10', '7', '3');

-- ----------------------------
-- Table structure for `cj_user`
-- ----------------------------
DROP TABLE IF EXISTS `cj_user`;
CREATE TABLE `cj_user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_pwd` varchar(50) NOT NULL,
  `user_group` int(1) NOT NULL,
  `user_reg_ip` varchar(16) NOT NULL,
  `user_reg_time` datetime NOT NULL,
  `user_last_login_ip` varchar(16) NOT NULL,
  `user_last_login_time` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_user
-- ----------------------------
INSERT INTO `cj_user` VALUES ('1', 'admin', '41d8b5fd1f06d2d430a4162d4dcc2a16', '0', '127.0.0.1', '2013-03-26 16:26:30', '127.0.0.1', '2013-05-25 17:39:59');
INSERT INTO `cj_user` VALUES ('2', 'CoderJ', '41d8b5fd1f06d2d430a4162d4dcc2a16', '1', '127.0.0.1', '2013-03-26 16:27:35', '127.0.0.1', '2013-03-26 17:06:23');
INSERT INTO `cj_user` VALUES ('3', 'editor', 'ec8df435cdb7a503bb2e8865fccfdd6f', '3', '127.0.0.1', '2013-03-26 16:58:06', '127.0.0.1', '2013-04-11 13:16:12');
INSERT INTO `cj_user` VALUES ('4', 'contentManage', 'f19f34413723d56c7e3467e3843046a0', '2', '127.0.0.1', '2013-03-26 17:03:50', '127.0.0.1', '2013-03-26 17:04:08');
