<?php


return [
        'users' => [
                'Balance' => [
                        'Failed' => '⭕️ 您的支付未通过确认',
                        'addBalanceUser' => '⭕️ 手动增加余额',
                        'blockedfake' => '⭕️ 封禁用户',
                        'changeto' => '❌ 错误 
    通过此网关支付的最低金额为 2 TRON',
                        'confirmPayAdmin' => '⭕️ 该支付已被确认',
                        'confirmPaying' => '✅ 确认支付',
                        'errorLinkPayment' => '❌ 创建支付链接时出错，请联系客服解决。',
                        'errorprice' => '❌ 错误 
💬 请仅输入数字',
                        'expired' => '支付链接已过期，无法再处理',
                        'finished' => '您的支付已成功确认',
                        'insufficientbalance' => '❌ 您的余额不足以购买该服务。
💸 如需充值，请输入金额（托曼）：
✅ 最低金额 %s 托曼，最高金额 %s 托曼',
                        'linkpayments' => '正在创建支付链接……',
                        'maxpurchasereached' => '❌ 您已达到购买上限。请先为账户充值，然后再购买新服务或续费现有服务',
                        'nowpayments' => '❌ 错误 
    通过此网关支付的最低金额为 1 美元。',
                        'payments' => '支付',
                        'receiptimage' => '🖼 已提交的收据图片',
                        'refunded' => '金额已退回到您的钱包',
                        'rejectPay' => '❌ 拒绝支付',
                        'selectPayment' => '💵 请选择您的支付方式',
                        'sendReceipt' => '🚀 您的支付收据已发送。经管理员审核通过后，金额将存入您的钱包',
                        'sendReceiptAndConfig' => '🚀 您的收据已发送，审核后将向您发送服务详情',
                        'sending' => '已收到付款，正在审核中，请稍候',
                        'waiting' => '等待支付确认',
                        'zarinpal' => '❌ 错误 
    通过此网关支付的最低金额为 5000 托曼。',
                ],
                'Discount' => [
                        'discountapplied' => '恭喜 🎉
📌 您的订单享受 %s%% 折扣',
                        'errorLimit' => '❌ 此优惠码的使用次数已用完',
                        'errorLimitDiscount' => '❌ 此礼品码的使用次数已用完',
                        'firstdiscount' => '❌ 此优惠码仅限首次购买使用。',
                        'getcode' => '💝 如需领取余额，请发送您的礼品码',
                        'getcodesell' => '🧑‍💻 请发送您的优惠码',
                        'gift-deposit' => '🎁 尊敬的用户，%s 托曼已作为礼物存入您的账户。',
                        'giftcodeonce' => '📌 此码仅可使用一次。',
                        'giftcodesuccess' => '礼品码已成功登记，%s 托曼已添加到您的余额。🥳',
                        'giftcodeused' => '⭕️ 用户名为 @%s、数字ID 为 %s 的用户使用了礼品码 %s。',
                        'notcode' => '❌ 无效的代码',
                ],
                'Major' => [
                        'title' => '📌 请发送您想购买的服务数量 
⚠️ 最少 1 个，最多 15 个',
                ],
                'Rules' => '✅ 规则已接受。您现在可以使用机器人的服务了。',
                'SendMessage' => '📩 向用户发送消息',
                'affiliates' => [
                        'affiliateedago' => '❌ 您之前已是其他用户的下线，无法再次成为下线',
                        'affiliatesidyou' => '❌ 无法使用此用户ID成为下线。',
                        'banner' => '⭕️ 请发送您的推荐横幅 

❌ 横幅必须包含图片',
                        'changedPriceDiscount' => '✅ 推荐金额已成功登记',
                        'changedpercentage' => '✅ 用户的返现比例已成功设置',
                        'insertbanner' => '✅ 您的横幅已成功登记。',
                        'invalidaffiliates' => '❌ 您不能成为自己的下线',
                        'invalidbanner' => '❌ 您发送的横幅无效（横幅必须附带图片发送）',
                        'offaffiliates' => '❌ 推荐功能已关闭',
                        'priceDiscount' => '📌 请输入您希望用户每次新增下线时获得的金额',
                        'setpercentage' => '📌 请发送您希望在购买后返现给用户的比例',
                ],
                'agent' => [
                        'acceptrequest' => '✅ 批准请求',
                        'agentRequest' => '📣 一名用户提交了代理申请。请审核信息并设置状态。

数字ID：<code>%s</code>
用户名：@%s
账户名称：%s
说明：%s',
                        'customnameusername' => '👤 选择自定义名称',
                        'endrequest' => '✅ 您的申请已提交。审核后将通知结果。',
                        'insufficientbalanceagent' => '❌ 您的余额不足以申请代理。请先为账户充值，然后再提交申请

💸 获得代理资格的费用：%s 托曼',
                        'isagent' => '❌ 您目前已是代理，无法提交代理申请。',
                        'rejectrequest' => '❌ 拒绝请求',
                        'requestreport' => '❌ 您已有一个提交的申请，无法再次申请。',
                ],
                'app' => [
                        'appempty' => '❌ 没有可供下载的应用程序。',
                        'selectapp' => '📌 请选择一个下载选项',
                ],
                'back' => '您已返回主页！',
                'backbtn' => '🏠 返回主菜单',
                'backmenu' => '🏠 返回上一级菜单',
                'block' => [
                        'descriptions' => '🚫 您已被管理员封禁。

✍️ 封禁原因：%s',
                ],
                'changeLink' => [
                        'btnTitle' => '⚙️ 更改链接',
                        'confirm' => '更改连接链接',
                        'warnchange' => '⚠️ 如果更新订阅链接，您之前的配置和服务将被断开。如需确认，请点击下方按钮',
                ],
                'channel' => [
                        'confirmed' => '您的会员资格已成功确认。感谢您 ❤️',
                        'confirmjoin' => '✅ 检查会员资格',
                        'left_channel' => '❌ 您已退出我们的频道，将无法获知新闻和更新。建议您重新加入频道',
                        'notconfirmed' => '❌ 您还未加入频道。️',
                ],
                'customSellVolume' => [
                        'title' => '⚙️ 自定义服务',
                ],
                'customusername' => '自定义用户名',
                'erroroccurred' => '❌ 发生错误，请重新开始操作',
                'extend' => [
                        'confirm' => '确认续费',
                        'discount' => '🎁 使用优惠码',
                        'emptyServiceforExtend' => '❌ 您没有可续费的服务。',
                        'renewalerror' => '❌ 续费过程中出错，请重新执行续费步骤',
                        'renewalinvoice' => '📜 您用户名 %s 的续费账单已生成。

🛍 产品名称：%s
💸 续费金额：%s
⏱ 续费时长：%s 天
🔋 续费流量：%s GB
✍️ 说明：%s
💸 钱包余额：%s

✅ 如需确认并续费，请点击下方按钮',
                        'selectOrderDirect' => '📌 请选择要续费的服务。',
                        'selectservice' => ' 🛍 请选择要续费的产品',
                        'thanks' => '🙏 感谢您续费服务。

✅ 您的续费已成功完成。
⬅️ 如需返回服务列表或查看详情，请点击下方按钮。',
                        'title' => '💊 续费服务',
                ],
                'extraTime' => [
                        'extratimecheck' => '确认并获取额外时间',
                        'title' => '⏳ 购买额外时间',
                ],
                'extraVolume' => [
                        'changedPrice' => '✅ 金额已成功保存。',
                        'enterextravolume' => '🔋 请输入您想要的额外流量（以 GB 为单位）：

📌 每 GB 价格：%s 托曼',
                        'extracheck' => '确认并获取额外流量',
                        'extravolumeinvoice' => '📇 已为您生成购买额外流量的账单。

💰 每 GB 额外流量价格：%s 托曼
📝 您的账单金额：%s 托曼
📥 申请的额外流量：%s GB

✅ 如需付款并增加流量，请点击下方按钮。',
                        'gettypeextra' => '📌 价格应为哪种用户类型设置？
用户类型：
f = 普通用户
n = 普通代理
n2 = 拥有更多权限的代理',
                        'invalidprice' => '🚫 最低流量为 1 GB',
                        'sellextra' => '➕ 购买额外流量',
                ],
                'help' => [
                        'btninlinebuy' => '📚 查看使用教程 ',
                        'disablehelp' => '尊敬的用户，教程部分目前已停用。😔',
                ],
                'invalidusername' => '❌ 用户名无效
🔄 请重新发送您的用户名',
                'note' => [
                        'changednote' => '✅ 备注已成功更改。',
                        'errorLongNote' => '❌ 新备注最多 150 个字符。',
                        'sendNote' => '📝 请发送您的新备注（最多可发送 150 个字符）。',
                ],
                'number' => [
                        'active' => '✅ 您的手机号码已成功验证',
                        'confirming' => '📞 请使用下方按钮发送您的手机号码进行身份验证',
                        'erroriran' => '⭕️ 手机号码无效。仅接受伊朗号码',
                        'false' => '❌ 电话号码不正确。请使用下方按钮发送您的电话号码。',
                        'warning' => '⚠️ 保存电话号码时出错，号码必须属于本账户',
                ],
                'page' => [
                        'next' => '下一个',
                        'notusernameme' => '🔎 列表中没有我的用户名',
                        'previous' => '上一个',
                ],
                'priceArze' => [
                        'tetherPrice' => '当前 USDT 价格为：%s 托曼',
                        'tronPrice' => '当前 TRON 价格为：%s 托曼',
                ],
                'search' => [
                        'title' => '🔎 快速搜索',
                        'usernamgeget' => '📌 请发送您的用户名',
                ],
                'selectoption' => '请选择一个选项',
                'selectusername' => '请发送一个自定义用户名
⚠️ 用户名不得包含多余字符，如 @、空格或连字符。
⚠️ 用户名必须为英文。
✅ 正确的用户名：ali12 | mahdi | ws1_ksdf
❌ 错误的用户名：ali_ | tele@ | _mahdi | محسن',
                'sell' => [
                        'errorConfig' => '❌ 创建订阅时出错，请联系客服解决问题。',
                        'errorProduct' => '❌ 所选产品不存在',
                        'noCredit' => '📝 您的账户余额不足。请从下方列表中选择一种支付方式',
                        'notestep' => '📌 请为您的配置写一个备注。
⚠️ 此名称用于在服务管理中更快地搜索
🪪（例如：Ali、Ahmad、叔叔、外地客户等）',
                        'serviceSelect' => '🛍️ 请选择您想购买的服务！',
                        'serviceSelectFirst' => '🛍️ 请选择您想购买的服务！',
                        'service_not_available' => '⛔️ 您没有任何有效服务',
                        'service_sell' => '🛍 您购买的订阅

⚠️ 如需查看详情并管理，请点击用户名

⭕️ 您也可以使用“🔎 快速搜索”按钮快速查找并管理您的服务',
                ],
                'spam' => [
                        'spamed' => '在机器人中发送过多消息',
                        'spamedMessage' => '📌 尊敬的用户，由于在机器人中发送垃圾信息，您的账户已被封禁。',
                        'spamedReport' => '数字ID 为 %s 的用户因在机器人中发送垃圾信息而被封禁',
                ],
                'status' => [
                        'acceptRequests' => '✅ 已成功登记',
                        'active' => '✅ 已激活',
                        'activedconfig' => '✅ 您的服务已成功激活',
                        'backinfo' => '↪️ 返回',
                        'backlist' => '🏠 返回服务列表',
                        'backservice' => '🏠 返回服务详情',
                        'config' => '🔰 获取配置',
                        'day' => ' 天 ',
                        'daysleft' => '剩余服务时间：',
                        'descriptionsRemoveService' => '📌 点击“✅ 我请求删除服务”按钮后，您的删除请求将发送给管理员，审核后您的服务将被取消。

❌ 若管理员批准，剩余未使用金额将退回到您的钱包。

感谢您使用我们的服务。',
                        'disabled' => '❌ 已停用',
                        'disabledconfig' => '❌ 您的服务已成功停用。',
                        'error' => '❌ 发生错误',
                        'errorexits' => '❌ 该用户名已提交过请求，无法提交新请求',
                        'errorusertest' => '❌ 测试账户无法退款。',
                        'exitsRequests' => '❌ 您已有一个提交的请求。请等待已提交的请求审核完毕，审核后您可以提交删除请求',
                        'expirationDate' => '结束时间：',
                        'expired' => '🔚 服务时间结束',
                        'hour' => ' 小时 ',
                        'info' => '📊 服务信息：',
                        'invalidUsername' => '❌ 用户名无效。
🔄 请重新发送您的用户名',
                        'lastTraffic' => '服务总流量：',
                        'limited' => '🚫 流量已用尽',
                        'linksub' => '🔗 订阅链接',
                        'min' => '分钟',
                        'month' => ' 月 ',
                        'notConsumed' => '未使用',
                        'notUsernameGet' => '用户名不存在',
                        'notchanged' => '❌ 无法更改服务状态。',
                        'on_hold' => '❌ 未连接',
                        'panelNotConnected' => '❌ 所请求服务的查询系统目前不可用。请一小时后再试',
                        'remainingVolume' => '剩余服务流量：',
                        'removeservice' => '❌ 退款',
                        'requestadmin' => '📌 删除拒绝请求已成功登记。请发送不批准的原因',
                        'sendUsername' => '📌 请发送您的用户名',
                        'sendrequestsremove' => '✅ 您的请求已发送。经管理员审核后，将向您通报结果',
                        'stateus' => '状态：',
                        'unknown' => '❌ 未知',
                        'unlimited' => '无限制',
                        'usedTrafficGb' => '已使用服务流量：',
                        'userNotFound' => '❌ 在服务器上未找到所请求的服务！',
                        'username' => '用户名： ',
                ],
                'support' => [
                        'answermessage' => '回复消息',
                        'btnsupport' => '☎️ 下方按钮（常见问题）中列出了您的常见问题。请点击下方按钮；若未找到您的问题，请点击客服按钮',
                        'sendmessageadmin' => '🚀 您的消息已发送。请等待管理员的回复',
                ],
                'text_start' => '你好，欢迎',
                'usertest' => [
                        'errorcreat' => '❌ 创建订阅时出错，请联系客服解决问题。',
                        'limitwarning' => '⚠️ 您的测试订阅创建次数已用完。',
                ],
                'wheelLuck' => [
                        'alreadyParticipated' => '❌ 您今天已参与过。明天再试试运气吧',
                        'error' => '❌ 获取游戏结果时出错。请稍后再试。',
                        'featureDisabled' => '❌ 此功能目前已关闭',
                        'notWinner' => '🥲 很遗憾您没有中奖。改天再来试试吧',
                        'wheelWinner' => '⭕️ 用户名为 @%s、数字ID 为 %s 的用户赢得了幸运转盘',
                        'winnerCongratulations' => '🤩 恭喜您中奖了！%s 托曼已添加到您的账户。',
                ],
        ],
        'Admin' => [
                'Balance' => [
                        'addAllBalance' => '📌 请发送用于全体充值的金额',
                        'addBalanceUser' => '✅ 金额已添加到该用户的余额',
                        'addBalanceUsers' => '✅ 金额已添加到各用户的余额',
                        'invalidPrice' => '金额无效',
                        'negativeBalance' => '⚜️ 请发送用户的数字ID 
说明：如需扣除用户余额，请先发送用户的数字ID',
                        'negativeBalanceUser' => '✅ 金额已从该用户的余额中扣除',
                        'priceBalance' => '已收到数字ID。请发送您想从该用户扣除的金额，金额应以托曼为单位',
                ],
                'Channel' => [
                        'setChannelReport' => '🔰 频道已成功配置',
                        'testChannel' => '测试群组连接',
                ],
                'Discount' => [
                        'agentCode' => '您想为哪位用户定义此码？

⚠️ 如果想为所有用户定义，请发送文本 <code>allusers</code>',
                        'errorCode' => '代码无效。代码必须为英文且不含多余字符',
                        'firstDiscount' => '📌 此优惠码应用于首次购买还是所有购买？',
                        'getCode' => '请发送一个礼品码代码',
                        'invalidAgentCode' => '❌ 用户类型无效',
                        'invalidCode' => '❌ 优惠码无效',
                        'notCode' => '❌ 错误 
📝 所选礼品码不存在',
                        'priceCode' => '已收到代码。现在请发送该代码的金额',
                        'priceCodeSell' => '已收到代码。现在请发送该代码的百分比',
                        'removeCode' => '请选择您想删除的代码',
                        'removedCode' => '✅ 代码已成功删除。',
                        'saveCode' => '✅ 代码已成功登记',
                        'setLimitUse' => '📌 请发送使用次数限制。
⚠️ 该限制适用于所有用户',
                ],
                'Discountsell' => [
                        'getCode' => '请发送一个优惠码代码',
                        'getLimit' => '📌 多少用户可以使用此优惠码？',
                ],
                'Help' => [
                        'getAddDesc' => ' 🔗 教程名称已保存。现在请发送您的说明 
⚠️ 注意：
🔸 您可以将说明与图片或视频一起发送',
                        'getAddName' => '如需添加教程，请发送一个名称 
⚠️ 注意：教程名称是用户在列表中看到的名称。',
                        'removeHelp' => '✅ 教程已删除。',
                        'saveHelp' => '✅ 教程已成功保存',
                        'selectName' => '请选择教程名称',
                ],
                'Payment' => [
                        'reasonRejecting' => '请发送拒绝该支付的原因',
                        'rejected' => '⭕️ 支付已成功拒绝，并已向用户发送消息',
                        'reviewedPayment' => '❌ 该支付已被其他管理员审核过',
                ],
                'Product' => [
                        'addProductStepOne' => ' 请先发送您的订阅名称
⚠️ 输入产品名称时的注意事项：
• 务必在订阅名称旁同时输入订阅价格。
• 务必在订阅名称旁同时输入订阅时长。',
                        'getLimit' => '请发送订阅流量。注意：流量单位为 GB。

如果您希望流量无限制，请发送数字 0',
                        'getPrice' => '
请发送订阅价格。
注意：
产品以托曼计价，请发送不含任何多余字符的价格。',
                        'getTime' => '
请输入订阅时长。注意：订阅的时间单位为天。
如果您希望时间无限制，请发送数字 0',
                        'getTimeReset' => '📌 请发送服务流量的周期性重置时间。如果不希望重置，请发送按钮 no_reset',
                        'invalidPrice' => '价格无效',
                        'invalidTime' => '天数无效',
                        'invalidVolume' => '流量无效',
                        'newTime' => '请发送新的时间',
                        'nullProduct' => '⭕️ 未找到任何产品。请联系客服解决问题',
                        'removeLocation' => '📌 请选择您产品的位置',
                        'removedProduct' => '✅ 产品已成功删除。',
                        'saveProduct' => '产品已成功保存 🥳🎉',
                        'selectEditProduct' => '请选择您想编辑的产品',
                        'selectRemoveProduct' => '请选择您想删除的产品',
                        'serviceLocation' => '📌 请选择您产品的位置

 ⭕️ 如需在所有位置定义该产品，请发送命令 /all',
                        'timeUpdated' => '✅ 产品时间已更新',
                        'volumeUpdated' => '✅ 产品流量已更新',
                ],
                'Protocol' => [
                        'invalidProtocol' => '❌ 无效的协议',
                        'removeProtocol' => '请选择您想删除的协议。',
                        'removedProtocol' => '协议已成功删除。',
                ],
                'SettingPayment' => [
                        'cartDirect' => '✅ 您的用户名已成功登记。',
                        'getNameCard' => '📌 请发送持卡人姓名。',
                        'isSetPay' => '❌ 您有一笔未确认的支付。请等待上一笔支付审核完毕，然后再发送新支付',
                        'saveCard' => '✅ 您的卡号已成功登记。',
                ],
                'SettingnowPayment' => [
                        'activeShowCardStatus' => '📌 已为所有用户启用卡号显示。',
                        'disableShowCardStatus' => '📌 已停用卡号显示。',
                        'saveApi' => '✅ 更改已成功保存',
                ],
                'Status' => [
                        'Authenticationiran' => '🇮🇷 验证伊朗号码',
                        'Authenticationphone' => '☎️ 电话号码身份验证',
                        'activePanel' => '⭕️ 在此部分，您可以开启或关闭面板的销售功能',
                        'activePanelOff' => '❌ 面板已关闭',
                        'activePanelOn' => '✅ 面板已开启',
                        'autoConfirmCard' => '卡转卡收据自动确认状态',
                        'autoConfirmOff' => '自动确认状态已关闭',
                        'autoConfirmOn' => '自动确认状态已开启',
                        'botTitle' => '📌 在此部分，您可以指定以下功能是否启用。',
                        'btn' => '📊 机器人统计',
                        'cardStatusOffPv' => '⭕ 私聊中的离线网关状态已关闭',
                        'cardStatusOnPv' => '私聊中的离线网关状态已开启',
                        'cardTitlePv' => '在此部分，您可以停用卡转卡功能，并在私聊中处理卡转卡流程',
                        'commission' => '机器人启动后赠送功能的启用状态',
                        'commissionOff' => '佣金功能已停用',
                        'commissionOn' => '佣金功能已启用',
                        'discountAffiliates' => '赠送功能的启用状态',
                        'discountAffiliatesOff' => '赠送功能已停用',
                        'discountAffiliatesOn' => '赠送功能已启用',
                        'inlinebtns' => '🛡 机器人按钮玻璃态（内联）',
                        'paydirect' => '🎯 直接购买状态',
                        'statusBot' => '📡 机器人状态',
                        'statusCategoryTime' => '⏱ 时间分类',
                        'statusNotifNewUser' => '👤 新用户通知',
                        'statusRole' => '♨️ 规则',
                        'statusShowAgent' => '👨‍💻 代理申请',
                        'statusSubject' => '状态',
                        'statusTimeExtra' => '⏳ 额外时间',
                        'statusUsernameBtn' => '👤 用户名按钮',
                        'statusVolumeExtra' => '🔋 额外流量状态',
                        'statusoff' => '❌ 关闭',
                        'statuson' => '✅ 开启',
                        'subject' => '标题',
                ],
                'activeBotText' => '使用管理面板功能：

前往底部带有键盘的页面。
在键盘中找到名为“机器人报告”的按钮并点击。
点击“机器人报告”按钮后，会打开一个页面。
在此页面，您可以选择并设置想要的群组。
此步骤是必需的',
                'addorder' => [
                        'stepFive' => '📌 服务已成功添加到该用户的账户。',
                        'stepFour' => '📌 请发送产品名称。',
                        'stepThree' => '📌 请选择配置位置。',
                        'stepTwo' => '📌 请发送该用户的配置用户名。',
                ],
                'affiliates' => [
                        'titleTopic' => '🎁 佣金报告',
                ],
                'agent' => [
                        'agentWelcome' => '👋 欢迎使用代理面板',
                        'getTypeAgent' => '📌 如需添加代理，请发送代理类型
1- 第一种代理类型 n：此类代理具有普通权限 
2- 第二种代理类型 n2：此类代理可在无信用额度限制的情况下购买服务。',
                        'invalidTypeAgent' => '❌ 代理类型无效',
                        'invalidValue' => '⭕️ 输入无效',
                        'setAgentProduct' => '该产品应向哪种用户显示？
第一种 f：普通用户
第二种 n：第二种代理，权限有限
第三种 n2：第三种代理，拥有更多权限',
                        'submitUsername' => '✅ 您的用户名已成功保存。',
                        'userAgentRemoved' => '❌ 该用户已成功取消代理身份',
                        'userAgented' => '✅ 该用户已成功成为代理',
                ],
                'algorithmExtend' => [
                        'saveData' => '✅ 服务续费方式已成功更新',
                ],
                'algorithmUsername' => [
                        'saveData' => '✅ 用户名创建方式已成功更新',
                ],
                'backAdmin' => '您已返回管理面板！',
                'backAdminBtn' => '🏠 返回管理菜单',
                'backMenu' => '您已返回上一级菜单！',
                'backMenuBtn' => '▶️ 返回上一级菜单',
                'btnKeyboard' => [
                        'addPanel' => '🖥 添加面板',
                        'manageUser' => '👤 用户管理',
                        'managementPanel' => '✏️ 面板管理',
                ],
                'changeLocation' => [
                        'confirm' => '✅ 确认转移',
                        'title' => '🌐 更改位置',
                ],
                'channel' => [
                        'changeChannel' => '如需设置强制加入频道，请输入带 @ 的频道用户名，或以 -100 开头的频道数字ID',
                        'description' => '📌 如需启用强制加入功能，请添加一个频道
此功能注意事项： 
- 机器人必须是频道的管理员
- 如需停用此功能，您必须删除所有频道',
                        'removeChannel' => '📌 请发送下方某个频道以删除',
                        'removeChannelBtn' => '删除频道',
                        'removedChannel' => '❌ 频道已成功删除。',
                        'title' => '添加频道',
                ],
                'cronjob' => [
                        'changedData' => '✅ 更改已成功保存',
                        'setDayRemove' => '📌 请发送在到期后多少天删除已到期账户
当前时间： ',
                        'setVolumeRemove' => '📌 请发送在流量用尽后多少天删除账户。账户时间根据用户最后一次连接计算。此功能适用于 Marzban 面板
当前时间： ',
                ],
                'customvolume' => [
                        'invalidTime' => '天数无效',
                ],
                'getStats' => '如果您想查看其他日期范围的统计数据，请先发送开始日期。
例如：
<code>%s</code>',
                'getlimitusertest' => [
                        'getId' => '请发送测试账户创建次数限制',
                        'limitAll' => '请输入测试账户创建次数限制。',
                        'setLimit' => '已为该用户设置限制。',
                        'setLimitAll' => '已为所有用户设置账户创建限制',
                        'setLimitBtn' => '➕ 所有人的测试账户创建限制',
                ],
                'manageUser' => [
                        'acceptedPhone' => '已确认',
                        'addBalanceUser' => '👆 增加余额',
                        'addBalanceUserDesc' => '⭕️ 请发送您想增加的金额',
                        'addBalanced' => '✅ 余额已成功添加到该用户的账户。',
                        'addagent' => '🤖 添加代理',
                        'banUserList' => '🔒 封禁用户',
                        'blockUser' => '🚫 该用户已被封禁。现在请同时发送封禁原因。',
                        'blockedUser' => '该用户之前已被封禁 ❗️',
                        'confirmNumber' => '手动确认电话号码',
                        'dataorder' => '未记录日期',
                        'descriptionBlock' => '✍️ 封禁该用户的原因已保存',
                        'failedPhone' => '未确认',
                        'getIdMessage' => '✅ 已收到文本。现在请发送用户的数字ID。',
                        'getIdUserUnblock' => '👤 请发送用户的数字ID',
                        'getText' => '请发送您的文本',
                        'getTextResponse' => '如需回复该消息，请发送您的文本。',
                        'lowBalanceUser' => '👇 减少余额',
                        'lowBalanceUserDesc' => '⭕️ 请发送您想扣除的金额',
                        'lowBalanced' => '✅ 余额已成功从该用户的账户中扣除。',
                        'manageUserBtn' => '⚙️ 用户管理',
                        'manageUserBtnDesc' => '⭕️ 在此部分，您可以查看所有用户 
⚠️ 如需管理某用户，请点击每个用户前的“用户管理”按钮',
                        'messageSent' => '✅ 消息已发送',
                        'newUser' => '🎉 一名新用户启动了机器人
 姓名：%s
用户名：@%s
数字ID：%s',
                        'removeService' => '❌ 删除订单',
                        'removeServiceAndBack' => '❌ 删除订单并退款',
                        'removeagent' => '🤖 移除代理',
                        'removedService' => '✅ 该用户的服务已删除。',
                        'sendMessageUser' => '✅ 消息已成功发送给该用户。',
                        'sendPaymentList' => '✅ 该用户的支付列表已发送',
                        'unbanUserList' => '🔓 解封用户',
                        'userNotBlock' => '该用户未被封禁 😐',
                        'userUnblocked' => '该用户已被解封。🤩',
                        'viewOrderUser' => '🛍 查看用户订单',
                        'viewPaymentUser' => '💰 查看用户支付',
                ],
                'manageadmin' => [
                        'addAdminSet' => '🥳 管理员已成功添加',
                        'adminAddedSendUser' => '⭕️ 尊敬的用户，您已成为机器人管理员。如需访问管理面板，您可以发送命令 <code>panel</code>',
                        'getId' => '🌟 请发送新管理员的数字ID',
                        'invalidRule' => '❌ 无效的权限级别',
                        'setRule' => '⭕️ 请发送管理员权限级别
administrator 权限级别可访问所有部分
Seller 权限级别仅可访问收据确认、用户服务和机器人统计部分
support 权限级别可访问用户服务和客服消息回复部分',
                ],
                'managepanel' => [
                        'Inbound' => [
                                'endInbound' => '🥳 入站已成功登记',
                                'getInbound' => '🔰 请发送您想为此协议设置的入站名称。',
                                'getPanelType' => '📌 请选择您的面板类型',
                                'getProtocol' => '🔱 请选择您的协议',
                                'invalidProtocol' => '⛔️ 协议无效。协议必须是下方选项之一',
                        ],
                        'addPanelName' => '请发送面板名称
       
⚠️ 注意：面板名称是在执行搜索操作时显示的名称。',
                        'addPanelUrl' => '🔗 面板名称已保存。现在请发送您的面板地址
    ⚠️ 注意：
    🔸 面板地址必须不含 dashboard 发送。
    🔹 如果面板端口为 443，则不应输入端口。（有时必须带端口输入）
    🔸 地址末尾不能有 /
    🔹 如果输入 IP，必须带有 http 或 https',
                        'addedPanel' => '恭喜，您的面板已成功添加',
                        'changedLimit' => '新限制已成功设置',
                        'changedNamePanel' => '✅ 面板名称已成功更改。',
                        'changedPasswordPanel' => '✅ 面板密码已成功更改。',
                        'changedUrlPanel' => '✅ 面板地址已成功更改。',
                        'changedUsernamePanel' => '✅ 面板用户名已成功更改。',
                        'connectXUi' => '✅ 面板已连接',
                        'customNameSend' => '请发送您的自定义文本',
                        'errorStatusPanel' => '无法连接到面板 😔 错误信息如下。如果问题未解决，请联系客服',
                        'getLimitedPanel' => '📌 请指定此面板上的账户创建限制。
⚠️ 请注意，该限制基于机器人中的有效订单数量 
如果您希望无限制，请发送文本 unlimited',
                        'getLoc' => '如需编辑面板，请发送面板名称',
                        'getNameNew' => '请发送新的面板名称',
                        'getPassword' => '🔑 用户名已保存。请输入您的密码',
                        'getPasswordNew' => '请发送新的面板密码',
                        'getUrlNew' => ' 请发送新的面板地址',
                        'getUsernameNew' => ' 请发送新的面板用户名',
                        'invalidDomain' => '🔗 域名地址无效',
                        'invalidName' => '名称无效',
                        'limitedPanel' => '❌ 很遗憾，此面板的账户创建容量已用尽。请使用其他面板',
                        'limitedPanelFirst' => '❌ 很遗憾，账户创建容量已用尽。请几小时后再试。',
                        'nullPanel' => '⭕️ 未找到任何位置。请联系客服解决问题',
                        'nullPanelAdmin' => '未定义面板。请先定义面板，然后再添加产品',
                        'removedPanel' => '面板已成功删除',
                        'repeatPanel' => '❌ 该面板名称已登记。您无法再次登记',
                        'savedData' => '✅ 更改已成功保存。',
                        'savedName' => '✅ 名称已成功保存',
                        'setLimit' => '请发送新的账户创建限制。如果您希望无限制，请发送文本 unlimited',
                        'setProtocol' => '✅ 协议已成功设置',
                        'usernameSet' => '👤 面板地址已保存。现在请发送用户名',
                ],
                'messageBulk' => [
                        'userMessage' => '📥 收到来自用户的消息回复。如需回复，请点击下方按钮并发送您的消息。

数字ID：%s
用户的用户名：@%s
📝 消息文本：%s',
                        'userResponse' => '📥 收到来自用户的消息回复。如需回复，请点击下方按钮并发送您的消息。

数字ID：%s
用户的用户名：%s
📝 消息文本：%s',
                ],
                'month' => [
                        1 => '⏳ 一个月',
                        '1day' => '⏳ 一天',
                        2 => '⏳ 两个月',
                        3 => '⏳ 三个月',
                        365 => '⏳ 一年',
                        4 => '⏳ 四个月',
                        6 => '⏳ 六个月',
                        '7day' => '⏳ 七天',
                        'title' => '📌 请选择服务时长',
                        'unlimited' => '🔋 按流量',
                ],
                'notUser' => '未找到具有此ID的用户',
                'order' => [
                        'notFound' => '❌ 未找到任何订单',
                        'viewOrderUsername' => '👁 如需查看该用户的订单，请发送该用户的配置用户名',
                ],
                'panelAdmin' => '👨‍💼 管理面板',
                'phone' => [
                        'active' => '该用户的手机号码已确认 ✅🎉',
                ],
                'report' => [
                        'reportCron' => '📝 通知报告',
                        'reportNight' => '🌙 夜间报告',
                ],
                'reportgroup' => [
                        'adminAdded' => '👨‍💼 一名具有以下信息的用户添加了一名管理员。

用户名 %s
数字ID：%s
权限类型：%s

⭕️ 新管理员信息：
数字ID：%s',
                        'newPaymentStar' => '💵 新支付
- 👤 用户的用户名：@%s
- 🆔 用户的数字ID：%s
- 💸 交易金额 %s
- 📥 已存入星星数量：%s
- 💳 支付方式：Telegram Stars',
                        'renewalDetails' => '📣 账户续费详情已在您的机器人中登记。
▫️ 用户的数字ID：<code>%s</code>
▫️ 用户的用户名：@%s
▫️ 配置用户名：%s
▫️ 用户名称：%s
▫️ 服务位置：%s
▫️ 产品名称：%s
▫️ 产品流量：%s
▫️ 产品时间：%s
▫️ 续费金额：%s 托曼
▫️ 用户余额：%s 托曼
▫️ 购买时间：%s',
                        'volumePurchase' => '⭕️ 一名用户购买了额外流量

用户信息：
🪪 数字ID：%s
🛍 购买的流量：%s
💰 支付金额：%s 托曼
购买前用户余额：%s
👤 配置用户名：%s',
                ],
                'transfer' => [
                        'confirm' => '✅ 如确认，请点击下方按钮以成功完成您的转移。',
                        'confirmed' => '✅ 服务转移已成功完成。',
                        'description' => '🛂 如需将此订阅转移给其他用户，您必须拥有目标账户的用户ID。

‼️ 转移注意事项：
1 - 如需获取用户ID，请前往钱包按钮 
2 - 将订阅转移给目标用户后，该订阅将从您的面板中移除。

🆕 请输入目标账户的用户ID：',
                        'notSendServiceYou' => '❌ 无法将服务转移给您自己。',
                        'notUserTrans' => '❌ 未找到具有此ID的用户。',
                        'title' => '🚚 将服务转移给其他用户',
                        'transferNotValid' => '❌ 无法将测试服务转移给其他用户。',
                ],
                'adminphp' => [
                        'btn_show_1' => '不再显示 ⛓️‍💥',
                        'ok_message_show' => '

✅ 此消息将不再向您显示。',
                        'ask_select_channel_join_name' => '📌 请为频道加入按钮选择一个名称。',
                        'ask_send_join_link' => '📌 请发送加入链接',
                        'err_invalid_join_address' => '加入地址不正确',
                        'ok_success_channel' => '✅ 强制加入频道已成功登记。',
                        'db_test_service_name' => '测试服务',
                        'btn_date_must' => '日期必须有效',
                        'ask_send_date' => '请发送结束日期，例如：
<code>2025/09/08</code>',
                        'ask_send_token' => '📌 请发送令牌（token）',
                        'err_panel_manage_link_domain' => '❌ 注意：
如需激活面板，您必须前往面板管理菜单，并务必设置“设置入站ID”和“订阅链接域名”选项；否则将无法创建配置',
                        'err_panel_user_manage_bot' => '❌ 注意：
如需激活面板，您必须前往面板管理菜单并设置协议和入站选项，以便机器人提供配置；否则将不会向用户提供配置',
                        'err_panel_manage_bot_set_1' => '❌ 注意：
如需激活面板，您必须前往面板管理菜单，进入“设置入站ID”菜单并设置配置名称；否则机器人将不会创建任何配置',
                        'err_panel_manage_bot_set_2' => '❌ 注意：
如需激活，您必须前往“面板管理” >“设置群组名称”，并将您在 ibsng 中定义的默认群组名称发送给机器人。',
                        'err_account_enable_must_note' => '❌ 注意：
1 - 您的 MikroTik 上必须安装记账（accounting）插件
2 - 在 ip » services » http 或 https 部分必须启用（如果您购买了 SSL，请启用 https；否则启用 http）',
                        'err_send_panel_admin_manage' => '❌ 注意：
1 - 在面板管理中设置以下选项

1 - uuid admin：从面板获取并登记管理员 uuid
2 - 订阅链接域名：请发送 Hiddify 面板的订阅链接域名',
                        'err_send_panel_user_1' => '❌ 注意：
1 - 从“面板管理” > 设置 ⚙️ 协议和入站，发送一个配置用户名。',
                        'err_send_message_1' => '❌ 消息发送系统当前正在执行操作。待其完成并通知您后，您可以发送新消息。',
                        'btn_message_1' => '取消置顶消息',
                        'msg_confirm' => '确认上述选项后，发送过程将开始',
                        'ask_service_user_group' => '📌 该服务应应用于哪个用户组？',
                        'err_error_message_please' => '❌ 发生错误。请从头重新执行消息发送步骤',
                        'ask_service_user' => '📌 该服务应应用于哪类用户？',
                        'msg_panel_user_message' => '📌 该消息应发送给下方面板中的哪些用户？',
                        'msg_message' => '📌 您是否希望将发送的消息置顶？',
                        'ask_send_user_bot_day' => '📌 在此功能中，消息会发送给您指定的、在一定天数内未使用机器人的用户
请发送您的天数。',
                        'ask_send_message' => '📌 请发送您的消息文本。',
                        'msg_select_message_button_show' => '📌 如果您希望在消息下方显示一个按钮，请从下方列表中选择一个选项；否则，请点击“不带按钮发送”按钮',
                        'msg_user_day_1' => '📌 在“在指定天数内未使用机器人的用户”部分，仅可发送文本。',
                        'msg' => '📌 在群发部分，仅可发送文本。',
                        'msg_user_day_2' => '在指定天数内未使用的用户',
                        'btn_user_1' => '发送给所有用户',
                        'btn_1' => '客户',
                        'btn_buy' => '没有购买记录的人',
                        'ok_1' => '✅ 操作已开始。完成后将通知您。',
                        'btn_message_2' => '📌 消息发送已取消。',
                        'ask_send_1' => '📌 请发送您的文本或图片',
                        'ask_send_user_number_1' => '📌 用户是否可以回复？
1 - 是，可以回复 
2 - 否，不可回复
请以数字发送答案',
                        'btn_user_message' => '📤 将消息转发给某用户',
                        'err_tutorial_name_must' => '❌ 教程名称必须少于 150 个字符',
                        'err_tutorial_name' => '❌ 该教程名称已存在。请使用其他名称。',
                        'ask_send_tutorial_name' => '📌 请发送教程的分类名称',
                        'ok_bot' => '✅ 机器人已开启',
                        'err_bot' => '❌ 机器人已关闭',
                        'ok_confirm_1' => '✅ 规则确认已开启',
                        'err_confirm_1' => '❌ 规则确认已关闭',
                        'ok_confirm_2' => '✅ 手机号码验证已开启',
                        'err_enable_disable_1' => '❌ 电话号码身份验证已停用',
                        'ok_2' => '✅ 伊朗号码验证已开启',
                        'err_enable_disable_2' => '❌ 伊朗号码检查已停用',
                        'err_select_set_group_number' => '❌ 所选群组未处于论坛模式。请先启用群组的话题功能，然后重新设置群组的数字ID',
                        'btn_report_buy_1' => '🛍 购买报告',
                        'err_admin_bot_group' => '❌ 机器人不是该群组的管理员',
                        'btn_report_buy_2' => '📌 服务购买报告',
                        'btn_account_report' => '🔑 测试账户报告',
                        'btn_report_1' => '⚙️ 其他报告',
                        'err_error_report' => '❌ 错误报告',
                        'btn_report_2' => '💰 财务报告',
                        'btn_bot_backup' => '🤖 机器人备份 ',
                        'err_name_must' => '❌ 产品名称必须少于 150 个字符',
                        'err_invalid_select_panel' => '❌ 所选面板错误',
                        'ask_send_name_1' => '📌 请发送您的分类名称。',
                        'err_notfound_select_add_1' => '❌ 所选分类不存在。请从“套餐” >“添加分类”添加您的分类，然后再添加产品。',
                        'ask_send_user_1' => ' 🗒 请发送该产品的备注。此备注将显示在用户的预开账单中。',
                        'ask_send_user_2' => ' 🗒 请发送该产品的备注。此备注将显示在用户的预开账单中。',
                        'ask_admin_delete_button' => '📌 在下方部分，您可以查看管理员列表。您也可以点击 X 按钮删除某个管理员',
                        'msg_user_renew_buy' => '⚠️ 如需批准用户请求，请先审核并批准购买或续费收据。然后批准钱包充值收据。 ',
                        'ask_select_user_1' => '📌 请选择用户类型',
                        'ask_send_price' => '请发送新价格',
                        'ok_price_day' => '✅ 产品价格已更新',
                        'ask_send_2' => '请发送新的备注',
                        'ok_day_1' => '✅ 产品备注已更新',
                        'ask_select_name_1' => '请选择新的分类名称',
                        'err_notfound_select_add_2' => '❌ 所选分类不存在。请从“套餐” >“添加分类”添加您的分类，然后再添加产品。',
                        'ok_day_2' => '✅ 产品分类已更新',
                        'ask_send_name_2' => '请发送新名称',
                        'ok_day_name' => '✅ 产品名称已更新',
                        'ask_send_user_3' => '请发送新的用户类型：
用户类型：f、n、n2',
                        'err_invalid_user_group_1' => '❌ 用户组无效',
                        'ask_send_volume_1' => '请发送流量重置类型',
                        'ask_select_1' => '📌 请选择新的产品位置',
                        'err_change_name' => '❌ 您无法将已定义的产品更改为位置名称 /all。',
                        'ok_day_3' => '✅ 产品位置已更新',
                        'ask_send_volume_2' => '请发送新的流量',
                        'msg_user_group' => '📌 充值应存入以下哪个用户组？',
                        'btn_user_2' => '📌 全体充值应发送给哪位用户？',
                        'ask_user_message' => '📌 是否应向用户发送充值通知消息？
是：1
否：0',
                        'ok_message' => '✅ 消息发送操作已开始。完成后将通知您。',
                        'btn_balance' => '⬇️ 减少余额',
                        'btn_3' => '📌 最大金额为 1 亿里亚尔。',
                        'btn_name_1' => '未知',
                        'btn_5' => '未认证',
                        'btn_6' => '已认证',
                        'btn_7' => '隐藏',
                        'btn_show_2' => '显示',
                        'btn_date' => '⭕️ 代理到期日期：',
                        'btn_delete_1' => '🗑 删除协议',
                        'ask_select_account_user' => '⭕️ 请通过下方按钮选择账户的用户名生成方式。
        
⚠️ 如果用户没有用户名，您选择的词语将被注册并用作用户名。
        
⚠️ 如果用户名已存在，将在用户名后添加一个随机数字',
                        'ask_user_name_register' => '📌 如果用户没有用户名，应注册什么名称？',
                        'ask_send_user_card_1' => '💳 请发送您的银行卡号

⚠️ 请注意，您可以定义多个卡号；如果定义了多个卡号，将随机向用户显示其中一个卡号',
                        'err_card_number_must' => '❌ 卡号必须为数字。',
                        'err_card' => '❌ 该卡号已存在于数据库中。',
                        'err_card_name_register_please' => '❌ 卡号注册失败。请重试或联系客服。',
                        'ask_select_2' => '📌 请选择一个选项',
                        'err_invalid_panel_user' => '❌ 面板用户名或密码错误',
                        'err_error_1' => '❌ 获取数据时发生错误。错误代码：',
                        'err_error_2' => '❌ 获取数据时发生错误。错误：',
                        'err_invalid_panel_link' => '❌ 发送的面板链接有误',
                        'btn_panel' => '面板未连接',
                        'ask_select_3' => '请选择一个选项',
                        'err_send_panel_user_2' => '📌 请发送用户类型
用户组：f,n,n2
❌ 如果您希望该面板对所有用户组显示，请发送文本 all',
                        'ok_success_user_1' => '📌 用户组修改成功',
                        'btn_link_domain_sub' => '🔗 订阅链接域名',
                        'ask_send_panel_user_1' => '📌 如果您使用的是 Sanaei 面板，请从面板复制一个用户的订阅链接，然后在此部分发送。其他面板需按其结构发送。',
                        'btn_link_sub_enable' => '订阅链接未激活',
                        'err_invalid_link_sub_name' => '订阅链接无效',
                        'ask_send_admin' => '📌 请发送管理员 UUID',
                        'ok_admin_save' => '✅ 管理员 UUID 已保存',
                        'ask_send_testservice_service_time' => '🕰 请发送测试服务的时长。
⚠️ 时间以小时为单位。',
                        'ask_send_testservice_service_volume' => '请发送测试服务的流量。
⚠️ 流量以兆字节为单位。',
                        'ask_send_panel_name_id' => '📌 请发送您希望用于生成配置的入站 ID。入站 ID 是一个多位数字，写在面板入站页面的 id 列中。

⚠️ 如果您使用的是 wgdashboard 面板，则必须发送配置名称',
                        'ok_success_save_1' => '✅ 入站 ID 保存成功',
                        'btn_set_1' => '⚙️ 协议设置',
                        'ask_send_confirm' => '如需确认，请发送下方的词语。
<code>تایید</code>',
                        'ask_select_4' => '📌 请从下方列表中选择一个选项',
                        'ask_group' => '📌 您想查看哪一组代理？',
                        'err_amount' => '❌ 最大金额为 1 亿托曼',
                        'ask_button_confirm' => '如需确认，请点击确认按钮',
                        'ok_success_user_2' => '✅ 用户认证成功。',
                        'ok_success_user_3' => '💎 尊敬的用户，您的账户已由管理员成功认证，现在您可以进行购买',
                        'ok_success_user_4' => '✅ 已成功取消该用户的认证状态。',
                        'msg_user_sub_bot' => '✳️ 您的账户已解除封禁 ✳️
现在您可以使用机器人了 ✔️',
                        'err_user_1' => '❌ 该用户没有下线。',
                        'msg_user_id' => '📌 已发送与该用户下线相关的 ID。',
                        'btn_user_3' => '📌 该用户已从下线中移除。',
                        'btn_user_delete' => '📌 该用户的下线已删除。',
                        'err_service_delete' => '❌ 该服务已被删除',
                        'err_error_3' => '发生了错误',
                        'ask_send_discount_hour_enable' => '📌 优惠码应激活多少小时？如果您希望无限期有效，请发送数字 0',
                        'ask_send_user_limit' => '📌 请发送单个用户的使用次数限制。',
                        'btn_discount' => '📌 优惠码应适用于哪个部分？',
                        'msg_user_limit_must' => '📌 单个用户的使用次数必须小于总限制',
                        'ask_send_select_panel_discount' => '📌 要为特定产品设置优惠码，请先选择产品位置。
注意：要选择所有面板，请发送词语 <code>/all</code>',
                        'ask_send_discount' => '📌 优惠码应适用于哪个产品？请注意，如果您希望优惠码适用于所有产品，请发送词语 all',
                        'err_invalid_name_1' => '百分比无效',
                        'ask_user_amount_sub_1' => '📌 请设置您希望用户为账户充值的最低金额',
                        'msg_user_balance_group' => '📌 最低余额应适用于哪个用户组？
f
n
n2',
                        'ask_user_amount_sub_2' => '📌 请设置您希望用户为账户充值的最高金额',
                        'ok_success_change_1' => '更改已成功应用',
                        'ask_send_user_balance_1' => '📌 请发送用户购买时余额可以为负的最大金额
注意：数字不应带有横线或负号
如果您希望用户无限购买，请发送数字 0',
                        'ask_select_service' => '⚠️ 找到多个服务；请从下方列表中选择正确的服务',
                        'btn_hour' => '小时',
                        'btn_8' => '兆字节',
                        'btn_day_1' => '天',
                        'btn_9' => '千兆字节',
                        'err_notfound_panel_user' => '该用户在面板中不存在',
                        'btn_10' => '在线',
                        'btn_11' => '离线',
                        'btn_12' => '未连接',
                        'err_account' => '❌ 关闭账户',
                        'btn_admin_renew' => '由管理员续费',
                        'btn_volume_add' => '额外流量',
                        'btn_time_add' => '额外时间',
                        'btn_sub' => '转移至其他账户',
                        'btn_renew' => '因用户不在列表中而续费',
                        'btn_change' => '更改位置',
                        'btn_time' => '全员时间赠送',
                        'btn_volume' => '全员流量赠送',
                        'btn_13' => '🪪 导出数据',
                        'btn_set_settings' => '🕚 定时任务设置',
                        'err_notfound' => '❌ 没有可导出的数据',
                        'btn_user_4' => '🪪 导出用户数据',
                        'btn_user_order' => '🪪 导出用户订单',
                        'btn_user_payment' => '🪪 导出用户付款记录',
                        'err_notfound_service_volume_time' => '❌ 由于流量和时间均为无限，无法删除该服务。',
                        'ask_send_amount_1' => '📌 请发送退款金额',
                        'ok_success_user_5' => '✅ 金额已成功添加到用户账户。',
                        'btn_day_2' => '天',
                        'msg_user_day_message_config' => '在此部分，您必须设置：如果用户在若干天后仍未连接到其配置且处于 on_hold 状态，则向用户发送消息',
                        'ok_tutorial_day_name_1' => '✅ 教程名称已更新',
                        'ask_send_3' => '请发送您的新分类',
                        'ok_tutorial_day_name_2' => '✅ 教程分类名称已更新',
                        'ask_send_4' => '请发送新的说明',
                        'ok_tutorial_day' => '✅ 教程说明已更新',
                        'ask_send_5' => '请发送新的图片或视频',
                        'ask_user_enable_disable' => '对所有用户还是仅对新用户禁用？
    新用户 0 
    所有用户 1
    2 除代理外的用户',
                        'err_invalid_select_name_renew' => '❌ 续费方式无效；请从下方列表中选择正确的续费方式',
                        'err_confirm_2' => '❌ 请先关闭无需审核的自动批准。',
                        'msg_account_api_bot_message' => '📌 机器人 API 文档 
注意： 
1 - 如果您需要特定的 endpoint，请向客服账户发送消息以便审核。',
                        'err_user_bot_name' => '❌ 该用户名在机器人中已存在。',
                        'err_error_group_report' => '❌ 创建订阅时发生错误；要解决此问题，请在您的报告群组中查看错误原因',
                        'msg_user_card_enable_buy' => '💳 尊敬的用户，卡号已为您激活；现在您可以进行购买。',
                        'ok_card_enable' => '✅ 卡号已激活',
                        'ok_card_enable_disable' => '✅ 卡号已停用',
                        'ask_send_card_delete' => '📌 请发送您要删除的卡号。',
                        'ok_success_card' => '✅ 卡号删除成功。',
                        'ok_success_1' => '✅ 请求已成功被拒绝。',
                        'err_user_2' => '❌ 尊敬的用户，您的代理申请已被拒绝。',
                        'ok_user_agent' => '✅ 尊敬的用户，您的代理申请已获批准，您已成为代理。',
                        'msg_agent_change_button' => '
请使用下方按钮更改代理类型。',
                        'btn_gateway' => 'Tornado 网关状态',
                        'ask_gateway' => '在此部分，您可以关闭或开启 Tornado 网关',
                        'btn_15' => '已关闭',
                        'btn_16' => '已开启',
                        'ok_success_save_2' => '入站名称保存成功',
                        'btn_bot' => '🗑 优化机器人',
                        'err_service_user_admin_payment' => '❌❌❌❌❌❌❌ 请仔细阅读以下文本

📌 确认下方选项后，将执行以下操作，且不可恢复

1 - 将删除未激活的订单
2 - 将删除未付款的订单。
3 - 由管理员删除的订单 
4- 删除未激活的测试服务
5 - 由用户删除的订单 
6 - 时间或流量已用尽的订单',
                        'err_error_send_user_volume' => '📌 在此部分，您可以设置：当用户的流量达到 x 时发送警告消息。请以 GB 为单位发送流量。',
                        'err_invalid_name_2' => '❌ 值无效',
                        'ok_success_save_3' => '✅ 更改保存成功',
                        'ask_send_user_manage' => '📌 在此部分，您可以手动创建并接收订单 
⚠️ 如果您希望将配置添加到用户账户并由用户管理，则必须使用添加订单选项。
- 要添加配置，请先发送用户名。',
                        'ask_send_config_1' => '📌 请发送您要创建的配置数量；最多可发送 10 个',
                        'err_send_number' => '❌ 最少 1 个，最多可发送 10 个。',
                        'ask_send_account_volume' => '📌 请发送账户的使用流量。流量以 GB 为单位。',
                        'ask_send_service_time_day' => '📌 请发送服务时长；时间以天为单位。',
                        'btn_17' => '自定义套餐',
                        'msg_help_bot_group_message' => '💬 | 机器人反馈

🔹 | 如果您在机器人运行中遇到<b>错误或问题</b>，请将其报告给我们以便审核。
➖➖➖➖➖➖➖➖➖➖➖
🔹 | 如果您遇到<b>严重错误</b>或异常行为，请尽快报告以便修复。
➖➖➖➖➖➖➖➖➖➖➖
🔹 | 如果您有<b>添加新功能</b>的建议或改进机器人性能的想法，我们很乐意听取。
➖➖➖➖➖➖➖➖➖➖➖
🔹 | 此外，如果您需要<b>指导</b>或帮助，可以通过私信联系客服团队。

📩 | 要发送报告、建议或请求指导，请在 <b>Mirza 群组</b>中留言：
<a href="https://t.me/mirzapanelgroup" rel="nofollow" target="_blank">Mirza Group</a>',
                        'ask_select_panel' => '🪚 要使用此功能，请选择下方的一个面板',
                        'err_admin' => '❌ 此部分仅主管理员可用',
                        'err_notfound_set_settings' => '❌ 无法查看节点设置',
                        'msg_panel_manage' => '📌 在此部分，您可以管理 Marzban 面板节点。',
                        'ask_send_6' => '📌 请发送您节点的使用系数。',
                        'ok_success_save_4' => '✅ 节点使用系数保存成功。',
                        'btn_name_2' => '📌 请发送您节点的名称。',
                        'ok_success_save_5' => '✅ 节点名称保存成功。',
                        'btn_18' => '📌 请发送节点的 IP。',
                        'ok_success_address' => '✅ 节点地址保存成功。',
                        'ok_3' => '✅ 节点重新连接完成。',
                        'ok_success_delete_1' => '✅ 节点删除成功',
                        'msg_manage_gateway' => '📌 在下方列表中，您可以管理网关。

⚠️ Mirza 团队不对网关提供任何保证，所有使用和责任由您承担',
                        'ask_send_user_sub_enable' => '📌 请发送续费后您希望作为礼品充值到用户账户的百分比。
⚠️ 如果您希望禁用，请发送数字 0',
                        'ask_select_user_2' => '📌 请选择用户类型
f
n
n2',
                        'err_invalid_user_group_2' => '❌ 用户组无效',
                        'ok_success_amount_1' => '✅ 金额设置成功',
                        'ask_send_user_payment_sub_1' => '📌 在此部分，您可以设置付款后作为礼品充值到用户账户的百分比。（要禁用此功能，请发送零）',
                        'ask_send_account_set' => '📌 请发送您的产品名称。如果您想为测试账户设置，请发送文本 test。',
                        'btn_19' => '测试',
                        'ask_notfound_send_set_name' => '未找到此名称的产品。请发送准确的产品名称，或发送文本 test 以设置测试配置。',
                        'ask_send_name_config_1' => '📌 请按以下示例发送您的配置。

# 配置名称（仅一行，名称前加 #）
配置（多行 

# 配置名称（仅一行，名称前加 #）

trojan://xyz',
                        'ok_save_config' => '✅ 已保存的配置数量：',
                        'err_error_save_config_please' => '❌ 保存配置时发生错误。请重试。',
                        'err_delete_config' => '❌ 删除配置',
                        'ask_send_delete_name_config' => '📌 请发送您要删除的配置名称 ',
                        'ok_success_delete_2' => '✅ 配置删除成功。',
                        'ask_send_panel_price_change' => '📌 请发送从其他面板更改到此面板的位置更改价格',
                        'ok_success_price_1' => '📌 位置更改价格修改成功',
                        'ask_send_panel_price_volume_1' => '📌 请发送此面板额外流量的价格。',
                        'ask_send_user_price' => '⚠️ 如果您希望为所有用户组设置价格，请发送文本 <code>all</code>',
                        'ask_send_panel_price_volume_2' => '📌 请发送此面板自定义额外流量的价格。',
                        'ask_send_panel_price_time_1' => '📌 请发送此面板额外时间的价格。',
                        'ask_send_panel_price_time_2' => '📌 请发送此面板自定义时间的价格。',
                        'msg_user_payment_gateway_card' => '📌 开启此功能后，用户首次付款后将为其激活卡对卡网关',
                        'btn_20' => '已关闭',
                        'btn_21' => '已开启',
                        'ask_send_name_config_2' => '📌 请发送您要编辑的配置名称 ',
                        'ask_select_5' => '请选择下方的一个选项 ',
                        'ask_send_config_2' => '请发送新的配置内容',
                        'ok_save' => '✅ 已保存。',
                        'ask_panel_price_change_must_1' => '📌 您想为哪个面板的产品提价？
如果您在定义产品时使用了 /all，若希望此分类有价格变动，则必须发送 /all',
                        'msg_user_price_group' => '📌 价格应适用于哪个用户组
f,n.n2',
                        'msg_amount_add' => '📌 金额应按百分比添加还是固定金额？',
                        'ask_send_amount_2' => '📌 请发送您要应用的金额',
                        'ask_send_7' => '📌 请发送您要应用的百分比',
                        'err_notfound_price_change' => '❌ 未找到可更改价格的产品',
                        'ok_success_amount_2' => '✅ 金额已成功应用于所有产品',
                        'ask_panel_price_change_must_2' => '📌 您想为哪个面板的产品降价？
如果您在定义产品时使用了 /all，若希望此分类有价格变动，则必须发送 /all',
                        'ask_send_amount_3' => '📌 请发送最低充值金额',
                        'ok_amount_set_1' => '✅ 最低充值金额已设置。',
                        'ask_send_amount_4' => '📌 请发送最高充值金额',
                        'ok_amount_set_2' => '✅ 最高充值金额已设置。',
                        'ask_send_panel_user_volume_1' => '📌 请发送用户可为此面板购买的最低流量。',
                        'ask_send_panel_user_volume_2' => '📌 请发送用户可为此面板购买的最高流量。',
                        'ask_send_panel_user_time_1' => '📌 请发送用户可为此面板购买的最短自定义时间。',
                        'ask_send_panel_user_time_2' => '📌 请发送用户可为此面板购买的最长自定义时间。',
                        'msg_admin_message_number' => '📌 请发送您希望将消息发送到的管理员数字 ID',
                        'ask_send_name_3' => '📌 请发送部门名称',
                        'ok_success_add_1' => '📌 部门添加成功。',
                        'err_notfound_delete' => '❌ 没有可删除的部门。',
                        'ask_send_delete' => '📌 请发送要删除的部门类型。',
                        'btn_delete_2' => '📌 所选部分已删除。',
                        'ask_send_panel_service_user' => '📌 要设置服务，请在您的面板中创建一个配置，在面板内激活您希望启用的服务，然后发送该配置的用户名',
                        'ok_success_set_1' => '✅ 信息设置成功',
                        'ask_send_tutorial' => '📌 请发送您的教程。
1 - 如果您不希望显示教程，请发送数字 2
2 - 您可以以视频、文本或图片形式发送教程',
                        'err_invalid_name_3' => '❌ 提交的内容无效。',
                        'ok_success_tutorial' => '✅ 教程保存成功。',
                        'btn_perfectmoney_tutorial_set' => '📚 设置 Perfect Money 教程',
                        'ask_send_join_price' => '📌 请发送代理会员申请的价格。',
                        'err_confirm_3' => '❌ 请先关闭自动批准。',
                        'ask_card_bot_time_enable' => '📌 激活此功能后，在您不在线的时段，机器人会自动批准所有卡对卡交易；待您上线后，您再审核收据，如果发送的是虚假收据，则取消该交易',
                        'ask_send_user_balance_2' => '请发送您希望将所有信息转移到的用户的数字 ID
    请注意，如果目标用户有余额，余额将被删除',
                        'err_user_3' => '❌ 您无法将信息转移到当前用户',
                        'ok_success_user_6' => '信息已成功转移到新用户账户',
                        'ask_send_8' => '请发送您的背景图片',
                        'err_invalid_name_4' => '图片无效',
                        'ok_success_set_2' => '🖼 背景设置成功',
                        'btn_set_group_name' => '🎛 设置群组名称',
                        'btn_set_2' => '⚙️ 节点设置',
                        'ask_send_group_name' => '📌 请发送您希望默认使用的群组名称。',
                        'ask_send_panel_user_2' => '📌 要设置节点，请在您的面板中创建一个用户，在面板内激活您希望启用的节点，然后发送该用户的用户名',
                        'ask_send_panel_user_3' => '📌 要设置入站和协议，您必须在面板中创建一个配置，在面板内激活您希望启用的协议和入站，然后发送该配置的用户名',
                        'err_notfound_panel_1' => '❌ 该用户在面板中不存在。',
                        'ok_success_set_3' => '✅ 群组名称设置成功。',
                        'ok_success_set_4' => '✅ 您的入站和协议设置成功。',
                        'btn_user_confirm' => '✍️ 该用户已认证',
                        'msg_channel_join_user_bot' => '📌 从现在起，用户无需加入频道即可在机器人中活动',
                        'err_notfound_admin_delete' => '❌ 无法删除主管理员',
                        'btn_notfound_admin_id' => '⚠️ 未找到此 ID 的管理员。',
                        'ok_success_admin' => '✅ 管理员删除成功',
                        'err_send_account_bot' => '❌ 机器人当前正在关闭或开启账户；请等待上一个操作完成后再发送新请求',
                        'ok_user_time_hour_enable_1' => '✅ 该用户的配置已加入激活队列。请注意，这可能需要超过 2 小时；时间取决于配置数量。',
                        'ok_user_time_hour_enable_2' => '✅ 该用户的配置已加入停用队列。请注意，这可能需要超过 2 小时；时间取决于配置数量。',
                        'ask_send_panel_user_number' => '📌 请发送此面板用户的数字 ID。',
                        'ok_success_panel_1' => '✅ 该面板已成功对用户隐藏',
                        'err_notfound_user_1' => '❌ 隐藏列表中没有用户',
                        'err_notfound_user_2' => '❌ 该用户不在列表中',
                        'err_notfound_user_3' => '❌ 该用户不在列表中。',
                        'ok_success_user_7' => '✅ 该用户已成功从列表中移除。',
                        'ask_send_user_amount_sub' => '📌 请发送您要为用户账户充值的金额。',
                        'ok_success_amount_3' => '✅ 奖励金额设置成功',
                        'err_payment_confirm' => '❌ 您没有未批准的付款。',
                        'err_user_payment_card_delete' => '📌 未批准的卡对卡付款 
在此部分，您可以查看未批准的付款并批准或拒绝它们。
❌ ：拒绝付款 
✅ ：批准付款
📝 付款详情
🗑 ：删除收据而不通知用户',
                        'ok_success_delete_3' => '✅ 所有收据已成功删除 ',
                        'ask_send_panel_user_4' => '📌 如果您使用的是 Marzban 或 Marzneshin 面板，请从面板复制一个配置的用户名并发送；否则，对于 Sanaei 和 Alireza 面板，请发送入站 ID',
                        'err_notfound_panel_2' => '❌ 此面板不支持定义入站',
                        'ok_day_4' => '✅ 产品已更新',
                        'err_user_4' => '❌ 该用户不存在。',
                        'err_error_renew' => '❌ 续费遇到错误；请重新执行续费步骤。',
                        'ask_send_volume_3' => '📌 请发送您请求的流量。',
                        'ask_select_service_time' => '⌛️ 请选择您的服务时长 ',
                        'err_error_service_renew' => '❌ 续费服务时发生错误；请联系客服',
                        'ok_success_delete_4' => '✅ 收据删除成功。',
                        'err_agent_bot' => '❌ 目前您仅限为您的代理创建 15 个机器人。',
                        'err_notfound_bot_1' => '❌ 此机器人已安装；无法重新安装。',
                        'ask_send_token_agent_bot' => '📌 通过此部分，您可以为您的代理创建一个销售机器人，使代理能够使用自己的专属机器人进行销售

- 要创建机器人，请发送机器人令牌。',
                        'err_invalid_token_name' => '❌ 令牌无效',
                        'btn_token_register' => '📌 此令牌已注册',
                        'ask_send_admin_number' => '📌 请发送管理员的数字 ID',
                        'ask_payment_amount_card' => '如需付款，请将金额存入下方卡号',
                        'err_success_agent' => '❌ 代理的销售机器人删除成功。',
                        'ask_price_agent_volume' => '📌 请设置您希望代理为每 GB 流量支付的最低价格',
                        'ok_success_price_2' => '✅ 价格保存成功。',
                        'ask_price_agent_time_day' => '📌 请设置您希望代理为每天时间支付的最低价格',
                        'msg_user_time_day' => '📌 在此部分，您可以设置在订阅结束前多少天通知用户。时间以天为单位',
                        'ask_select_6' => '📌 请选择一个选项。',
                        'ask_send_link_add_name' => '📌 要添加应用下载链接，请发送应用名称或按钮名称。',
                        'btn_name_must' => '📌 名称必须少于 200 个字符。',
                        'ask_send_link_1' => '📌 请发送应用下载链接',
                        'ok_success_link_1' => '✅ 您的应用链接添加成功。',
                        'ask_select_delete_name' => '📌 要删除应用，请从下方列表中选择应用名称',
                        'ok_success_delete_5' => '✅ 应用删除成功。',
                        'ask_send_user_payment_sub_2' => '📌 在此部分，您可以设置付款后作为礼品充值到用户账户的百分比。（要禁用此功能，请发送零）',
                        'ask_send_panel_service_price' => '📌 提交信息前，请阅读以下文本。 
1 - 此功能用于自定义服务。
2 - 如果您所有面板价格相同，则无需逐个设置价格，可以使用此功能一次性设置所有价格。
3 - 在此部分设置价格后不可恢复。


要设置价格，请先发送 f 组的价格。',
                        'ask_send_price_group_1' => '📌 请发送 n 组的价格。',
                        'ask_send_price_group_2' => '📌 请发送 n2 组的价格。',
                        'ok_success_price_3' => '✅ 价格设置成功',
                        'ask_select_user_change_limit' => '📌 请选择一个选项。
1 - 用户总共可以更改位置的总限制次数。
2 - 在总限制中，用户可以免费更改位置的免费限制次数。',
                        'ok_success_set_5' => '✅ 限制设置成功。',
                        'msg_user_change' => '📌 确认下方选项后，用户所做的所有位置更改将被重置为零。如果您同意，请点击下方选项。',
                        'ok_user_limit' => '✅ 所有用户的限制已重置为零。',
                        'ask_send_user_set_change' => '📌 请发送您要为用户设置的新限制。请注意，此功能会更改已进行的位置更改次数',
                        'ok_success_user_8' => '✅ 用户的使用次数保存成功。',
                        'err_send_select_panel_agent_1' => '❌ 请从下方按钮选择您不希望向此代理显示的面板；选择后，发送 /finish 命令以保存。',
                        'ok_success_panel_2' => '✅ 面板保存成功，并已对用户隐藏这些面板。',
                        'err_panel_add' => '❌ 该面板已被添加',
                        'ok_send_select_panel_save_1' => '✅ 已选择该面板；完成后，发送 /finish 命令以最终保存。',
                        'err_send_select_panel_agent_2' => '❌ 请从下方列表中选择您希望在代理机器人中重新显示的面板；选择所有面板后，发送 /remove 命令以保存。',
                        'ok_success_panel_3' => '✅ 面板显示成功，并已为用户激活这些面板。',
                        'err_notfound_panel_3' => '❌ 该面板不在列表中',
                        'ok_send_select_panel_save_2' => '✅ 已选择该面板；完成后，发送 /remove 命令以最终保存。',
                        'err_send_message_2' => '❌ 礼品发送系统正在执行操作；待其完成并通知您后，您可以发送新消息。',
                        'ask_panel_service_volume_time' => '📌 您想为哪个面板的服务赠送流量或时间？',
                        'err_notfound_panel_4' => '❌ 该面板不存在',
                        'ask_select_7' => '📌 请选择下方的一个礼品。',
                        'msg_service_user_volume_add' => '📌 您想为用户的服务添加多少 GB 流量？',
                        'msg_service_user_day_add' => '📌 您想为用户的服务添加多少天？',
                        'ask_send_user_4' => '📌 请发送您希望发送给用户的文本',
                        'msg_admin_time_limit_confirm' => '📌 尊敬的管理员，确认下方选项后，将开始应用礼品的流程。请注意，由于限制，应用礼品将需要一些时间。',
                        'err_error_4' => '❌ 发生了错误；请从头执行各步骤。',
                        'ok_success_add_2' => '✅ 礼品发送操作已成功开始；待添加并完成后将通知您。',
                        'btn_23' => '📌 礼品发送已取消。',
                        'ask_send_user_agent_bot' => '🕘 请发送代理到期时间。在指定天数结束后，用户将退出代理状态并成为用户组 f。
请注意，此功能与机器人生成器或代理销售机器人功能无关，仅与您的主机器人相关

📌 请发送天数',
                        'ok_user_time_date' => '✅ 到期日期已设置。
📌 时间结束后，用户的用户组将更改为 f 并通知用户。',
                        'msg_card' => '📌 请发送您希望显示卡号的 ID 列表 
示例： 
1234435423
23423131',
                        'ok_user_card_enable' => '✅ 卡号已为所发送的用户激活。',
                        'btn_user_card_enable' => '📌 尚未为任何用户激活卡号',
                        'msg_user_card_enable' => '🪪 卡号已激活的用户列表',
                        'msg_user_buy' => '您可以决定佣金是仅为下线的首次购买提供，还是为其所有购买提供。',
                        'err_notfound_service_change_config' => '❌ 尚未连接到配置，无法更改服务状态。连接到配置后，您可以使用此功能。',
                        'ok_enable_disable_confirm_config' => '✅ 确认并停用配置',
                        'err_notfound_service_account_manage' => '📌 确认下方选项后，您的配置将被关闭，您将无法再连接到该配置。
⚠️ 如果您希望重新激活配置，必须从服务管理部分点击 <u>💡 开启账户</u> 按钮',
                        'ok_enable_confirm_config' => '✅ 确认并启用配置',
                        'err_service_account_manage_enable' => '📌 确认下方选项后，您的配置将被开启，您将能够连接到该配置。
⚠️ 如果您希望再次停用配置，必须从服务管理部分点击 <u>❌ 关闭账户</u> 按钮',
                        'msg_panel_service_sub_bot' => '📌 确认下方选项后，此服务将从机器人数据库中彻底删除，且不再计入账户统计（此部分不会从面板删除服务，仅从机器人数据库删除）',
                        'ok_success_service' => '✅ 服务删除成功。',
                        'ask_send_add_name' => '📌 要添加分类，请发送分类名称。',
                        'ok_success_add_3' => '✅ 分类添加成功。',
                        'ask_select_delete' => '📌 请选择您要删除的分类',
                        'ok_success_delete_6' => '✅ 分类删除成功。',
                        'msg_user_time' => '📌 此功能仅在您将产品位置定义为 /all 时有效。',
                        'ask_send_select_panel' => '📌 如果您将面板位置选择为 /all，但需要不显示某个面板，可以使用此功能

要隐藏面板，请从下方列表中选择您的面板，然后发送 /end_hide 命令。',
                        'ok_success_select' => '✅ 面板保存成功，并已为所选产品隐藏这些面板。',
                        'ok_send_select_panel_save_3' => '✅ 已选择该面板；完成后，发送 /end_hide 命令以最终保存。',
                        'ok_panel_delete' => '✅ 所有隐藏的面板已被移除',
                        'err_notfound_bot_2' => '❌ 没有机器人',
                        'btn_24' => '📌 正在执行 webhook ...',
                        'ok_success_2' => '✅ webhook 执行成功。',
                        'ok_user_enable' => '✅ 已为用户启用定时任务通知。',
                        'ok_user_enable_disable' => '✅ 已为用户停用定时任务通知。',
                        'ask_select_8' => '📌 请选择您要编辑的分类',
                        'ask_send_name_4' => '📌 请发送新的分类名称',
                        'ok_success_change_2' => '✅ 分类名称修改成功。',
                        'ask_select_name_2' => '📌 要编辑应用，请从下方列表中选择应用名称',
                        'ask_send_link_2' => '📌 请发送新的应用链接',
                        'ok_success_link_2' => '✅ 应用链接更新成功。',
                        'ok_success_time' => '✅ 时间注册成功。',
                        'btn_25' => '关闭',
                        'btn_26' => '开启',
                        'msg_buy' => '📌 通过此功能，您可以设置此产品是否为首次购买专用',
                        'msg_select_confirm' => '📌 请选择一个选项
⚠️ 此部分用于无需审核的自动批准',
                        'ask_send_user_number_2' => '📌 请发送用户的数字 ID',
                        'err_notfound_user_4' => '❌ 该用户不存在。',
                        'err_user_5' => '❌ 该用户已在例外列表中',
                        'ok_success_user_9' => '✅ 该用户已成功添加到列表。',
                        'ask_send_user_delete_number' => '📌 请发送要从列表中删除的用户的数字 ID',
                        'err_notfound_user_5' => '❌ 该用户不在例外列表中',
                        'ok_success_user_10' => '✅ 该用户已成功从列表中移除。',
                        'err_notfound_user_6' => '❌ 列表中没有用户',
                        'btn_27' => '人员列表👇',
                        'msg_panel_admin_bot_report' => '💎 | Version Bot: %s
📌 | Version Mini App: 0.1.1

<blockquote>🔹 | 此机器人完全免费，由 Mirza 团队开发</blockquote>

<blockquote>🔹 | 任何对此机器人的出售或收费均视为违规。</blockquote>

<blockquote>🔹 | 如果您发现任何出售或收费行为，请追踪并追回您的款项。</blockquote>

<blockquote>🐞 | 如果您在机器人运行中遇到错误或问题，请通过管理面板中的 **📬 机器人反馈** 按钮联系我们。</blockquote>',
                        'ok_payment_gateway_name' => '
📌 网关名称：<code>%s</code>
 - 成功支付次数：<code>%s</code>
 - 支付总额：<code>%s</code>
',
                        'msg_panel_service_account_user' => '📊 <b>机器人总体统计</b>
━━━━━━━━━━━━━━━━━━
👥 <b>用户总数：</b> <code>%s</code> 人  
💳 <b>有购买的用户：</b> <code>%s</code> 人  
🧪 <b>测试账户：</b> <code>%s</code> 人  
💰 <b>用户总余额：</b> <code>%s</code> 托曼  

🧾 <b>总销售数量：</b> <code>%s</code>  
🧾 <b>活跃服务的总销售数量：</b> <code>%s</code>  
💵 <b>总销售额：</b> <code>%s</code> 托曼  
💵 <b>活跃服务的总销售额：</b> <code>%s</code> 托曼  
🔄 <b>总续费额：</b> <code>%s</code> 托曼  
📈 <b>客户转化率：</b> <code>%s</code>٪  
💳 <b>每位客户平均购买额：</b> <code>%s</code> 托曼  
📅 <b>预计月收入：</b> <code>%s</code> 托曼  
📊 <b>续费占销售比例：</b> <code>%s</code>٪  


👨‍💼 <b>代理总数：</b> <code>%s</code> 人  
🔹 <b>N 类代理：</b> <code>%s</code> 人  
🔸 <b>N2 类代理：</b> <code>%s</code> 人  
🧩 <b>面板数量：</b> <code>%s</code>  
%s
',
                        'msg_account_user_amount_volume_1' => '
🕐 <b>过去 1 小时统计</b>


🛍 订单数量：%s 个
💸 订单总金额：%s 托曼

🧲 续费数量：%s 个
💰 续费总金额：%s 托曼

📦 额外流量：%s 个
💰 额外流量金额：%s 托曼

⏱️ 额外时间：%s 个
💰 额外时间金额：%s 托曼

📍 位置更改：%s 个
💰 位置更改金额：%s 托曼

🔑 测试账户：%s 个
👤 用户数量：%s 人
',
                        'msg_account_user_amount_volume_2' => '
🕐 <b>前一天统计</b>

⏳ 时间范围：%s 至%s

🛍 订单数量：%s 个
💸 订单总金额：%s 托曼

🧲 续费数量：%s 个
💰 续费总金额：%s 托曼

📦 额外流量：%s 个
💰 额外流量金额：%s 托曼

⏱️ 额外时间：%s 个
💰 额外时间金额：%s 托曼

📍 位置更改：%s 个
💰 位置更改金额：%s 托曼

🔑 测试账户：%s 个
👤 用户数量：%s 人
',
                        'msg_account_user_amount_volume_3' => '
🕐 <b>当天统计</b>

⏳ 时间范围：%s 至%s

🛍 订单数量：%s 个
💸 订单总金额：%s 托曼

🧲 续费数量：%s 个
💰 续费总金额：%s 托曼

📦 额外流量：%s 个
💰 额外流量金额：%s 托曼

⏱️ 额外时间：%s 个
💰 额外时间金额：%s 托曼

📍 位置更改：%s 个
💰 位置更改金额：%s 托曼

🔑 测试账户：%s 个
👤 用户数量：%s 人
',
                        'msg_account_user_amount_volume_4' => '
🕐 <b>上月统计</b>

⏳ 时间范围：%s 至%s

🛍 订单数量：%s 个
💸 订单总金额：%s 托曼

🧲 续费数量：%s 个
💰 续费总金额：%s 托曼

📦 额外流量：%s 个
💰 额外流量金额：%s 托曼

⏱️ 额外时间：%s 个
💰 额外时间金额：%s 托曼

📍 位置更改：%s 个
💰 位置更改金额：%s 托曼

🔑 测试账户：%s 个
👤 用户数量：%s 人
',
                        'msg_account_user_amount_volume_5' => '
🕐 <b>本月统计</b>

⏳ 时间范围：%s 至%s

🛍 订单数量：%s 个
💸 订单总金额：%s 托曼

🧲 续费数量：%s 个
💰 续费总金额：%s 托曼

📦 额外流量：%s 个
💰 额外流量金额：%s 托曼

⏱️ 额外时间：%s 个
💰 额外时间金额：%s 托曼

📍 位置更改：%s 个
💰 位置更改金额：%s 托曼

🔑 测试账户：%s 个
👤 用户数量：%s 人
',
                        'msg_select_account_user_amount' => '
🕐 <b>所选日期统计</b>

⏳ 时间范围：%s 至 %s

🛍 订单数量：%s 个
💸 订单总金额：%s 托曼

🧲 续费数量：%s 个
💰 续费总金额：%s 托曼

📦 额外流量：%s 个
💰 额外流量金额：%s 托曼

⏱️ 额外时间：%s 个
💰 额外时间金额：%s 托曼

📍 位置更改：%s 个
💰 位置更改金额：%s 托曼

🔑 测试账户：%s 个
👤 用户数量：%s 人
',
                        'msg_message_button_confirm' => '📌 您正在执行发送消息操作；查看以下信息并确认下方按钮后，发送操作将开始。
⚙️ 操作类型：%s',
                        'btn_user_day_message' => '用户未发消息的天数：%s',
                        'msg_service_user_message' => '📌 您正在执行发送消息操作；查看以下信息并确认下方按钮后，发送操作将开始。
⚙️ 操作类型：%s
🎛 服务类型：%s
🗂 用户类型：%s
%s
',
                        'msg_admin_message' => '
👤 管理员发送了一条消息  
消息内容：

%s',
                        'msg_manage_message_1' => '
📩 管理层向您发送了一条消息。
                    
消息内容： 
%s',
                        'msg_manage_message_2' => '
📩 管理层向您发送了一条消息。
                    
消息内容： 
%s',
                        'ask_send_admin_tutorial' => '📣 在此部分，您可以发送群组的数字 ID 以发送通知
群组设置教程：
1 - 首先创建一个群组 
2 - 将机器人 @myidbot 加入群组，并在群组内发送命令 /getgroupid@myidbot 
3 - 在群组设置中开启话题或论坛模式4
4 - 将您自己的机器人设为群组管理员 
5 - 将发送的数字 ID 发送给机器人。

您当前的数字 ID：%s',
                        'err_success_error' => '❌ 连接到群组未成功  

收到的错误：  %s',
                        'err_name_1' => '❌ 名为 %s 的产品已存在',
                        'ok_user_admin_payment' => '✅. 该付款已由另一位管理员批准
👤 用户 ID：<code>%s</code>
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💎 批准后余额：%s
💸 支付金额：%s 托曼
',
                        'msg_user_amount_sub' => '🎁 尊敬的用户，%s 托曼已作为礼物存入您的账户。',
                        'msg_user_admin_payment' => '📣 一位管理员批准了付款收据。
        
信息：
💸 支付方式：%s
👤 批准管理员的数字 ID：%s
💰 付款金额：%s
👤 用户数字 ID：<code>%s</code>
👤 用户用户名：@%s 
        付款跟踪码：%s',
                        'err_user_payment' => '❌ 尊敬的用户，您的付款因以下原因被拒绝。
✍️ %s
🛒 付款跟踪码：%s
                
',
                        'err_user_admin_payment' => '❌ 一位管理员拒绝了付款收据。
        
信息：
💸 支付方式：%s
👤 批准管理员的数字 ID：%s
批准管理员的用户名：@%s
💰 付款金额：%s
拒绝原因：%s
👤 用户数字 ID：%s',
                        'msg_user_price_volume' => '
📌 正在编辑的产品信息：
产品名称：%s
产品价格：%s
产品流量：%s
产品位置：%s
产品时间：%s
产品用户类型：%s
产品流量周期性重置：%s
产品备注：%s
产品分类：%s
已售产品数量：%s
    
',
                        'err_name_2' => '❌ 名为 %s 的产品已存在',
                        'msg_user_manage_amount' => '🎁 尊敬的用户，管理层向您的钱包赠送了 %s 托曼。',
                        'err_user_balance_amount_1' => '❌ 尊敬的用户，已从您的钱包余额中扣除 %s 托曼。',
                        'msg_user_admin_balance_1' => '📌 一位管理员减少了用户的余额：
        
🪪 减少余额的管理员信息： 
用户名：@%s
数字 ID：%s
👤 用户信息：
用户数字 ID：%s
余额金额：%s
减少后的用户余额：%s',
                        'msg_join_account_user' => '👀 用户信息：

🔗 用户账户信息

⭕️ 用户状态：%s
⭕️ 用户用户名：@%s
⭕️ 用户数字 ID：<a href = "tg://user?id=%s">%s</a>
⭕️ 用户推荐码：%s
⭕️ 用户加入时间：%s
⭕️ 用户最后使用机器人的时间：%s
⭕️ 测试账户限制：%s 
⭕️ 规则接受状态：%s
⭕️ 手机号码：<code>%s</code>
⭕️ 用户类型：%s
⭕️ 用户下线数量：%s
⭕  用户推荐人：%s
⭕  身份认证状态：%s   
⭕  卡号显示：%s
⭕ 用户积分：%s
⭕️  已购买的活跃总流量（要获得准确的流量统计，必须开启定时任务）：%s
%s

💎 财务报告

🔰 用户余额：%s
🔰 用户总购买次数：%s
🔰️ 总支付金额：%s
🔰 总购买额：%s
🔰 用户折扣百分比：%s
🔰 过去一小时销售数量：%s
🔰 过去一小时销售总额：%s 托曼
🔰 过去一个月销售数量：%s
🔰 过去一个月销售总额：%s 托曼


',
                        'ask_send_api' => '⚙️ 请发送您的 Plisio API 密钥。

🔑 要获取 API 密钥，请访问以下网站：
plisio.net

📌 您当前的密钥：
<code>%s</code>',
                        'ask_enter_api' => '⚙️ 请发送您的 NowPayments API 密钥。

🔑 要获取 API 密钥，请访问以下网站：
nowpayments.io

📌 您当前的密钥：
<code>%s</code>',
                        'ask_enter_payment_merchant' => '💳 从 Aghaye Pardakht 获取您的商户代码并在此部分输入
        
您当前的商户代码：%s',
                        'ask_enter_zarinpal_merchant' => '💳 从 ZarinPal 获取您的商户代码并在此部分输入
        
您当前的商户代码：%s',
                        'ok_select_panel_user_1' => '
您的面板统计👇：
                             
🖥 Marzban 面板连接状态：✅ 面板已连接
👥  用户总数：%s
👤 活跃用户数：%s
📡 Marzban 面板版本：%s
💻 服务器总内存：%s
💻 Marzban 面板内存使用：%s
🌐 已消耗总流量（上传/下载）：%s
🛍 此面板总销售数量：%s
🛍 此面板总销售额：%s 托曼
用户组：%s
        
⭕️ 要管理面板，请选择下方的一个选项',
                        'err_error_5' => '错误原因： 
%s',
                        'err_error_6' => '错误原因 %s',
                        'ok_select_panel_user_2' => '
您的面板统计👇：
                             
🖥 面板连接状态：✅ 面板已连接
💻 服务器总内存：%s
💻 面板内存使用：%s
用户组：%s
⭕️ 要管理面板，请选择下方的一个选项',
                        'ok_select_panel_user_3' => '
您的面板统计👇：
                             
🖥 Marzban 面板连接状态：✅ 面板已连接
👥  用户总数：%s
👤 活跃用户数：%s
🛍 此面板总销售数量：%s
🛍 此面板总销售额：%s 托曼
用户组：%s
        
⭕️ 要管理面板，请选择下方的一个选项',
                        'msg_time_name' => '<b>📡 您的 MikroTik 系统信息：</b>

<blockquote>
🖥 <b>平台：</b> %s  
🏷 <b>版本：</b> %s  
🕰 <b>运行时长：</b> %s  
</blockquote>

<blockquote>
💽 <b>架构名称：</b> %s  
📋 <b>主板型号：</b> %s  
🏗 <b>系统构建时间：</b> %s  
</blockquote>

<blockquote>
⚙️ <b>处理器：</b> %s  
🔢 <b>核心数量：</b> %s  
🚀 <b>CPU 频率：</b> %s  
📊 <b>CPU 负载：</b> %s %%
</blockquote>

<blockquote>
💾 <b>硬盘总空间：</b> %s GB  
📂 <b>硬盘可用空间：</b> %s GB  
🧠 <b>总内存：</b> %s GB  
📉 <b>可用内存：</b> %s GB
</blockquote>

<blockquote>
📝 <b>自重启以来写入的扇区：</b> %s  
🧮 <b>写入扇区总数：</b> %s
</blockquote>
',
                        'msg_user_balance_amount_add_1' => '💎 尊敬的用户，已向您的钱包余额添加 %s 托曼。',
                        'msg_user_admin_balance_2' => '📌 一位管理员增加了用户的余额：
        
🪪 增加余额的管理员信息： 
用户名：@%s
数字 ID：%s
👤 接收余额的用户信息：
用户数字 ID：%s
余额金额：%s
增加后的用户余额：%s',
                        'err_user_balance_amount_2' => '❌ 尊敬的用户，已从您的钱包余额中扣除 %s 托曼。',
                        'msg_user_admin_balance_3' => '📌 一位管理员减少了用户的余额：
        
🪪 减少余额的管理员信息： 
用户名：@%s
数字 ID：%s
👤 用户信息：
用户数字 ID：%s
余额金额：%s
减少后的用户余额：%s',
                        'msg_user_admin_bot_number_1' => '数字 ID 为
%s 的用户已在机器人中被封禁 
封禁管理员：%s',
                        'msg_user_admin_bot_number_2' => '数字 ID 为
%s 的用户已在机器人中被解封 
封禁管理员：%s',
                        'msg_user_payment_amount_date_1' => '🛒 付款编号：<code>%s</code>
🙍‍♂️ 用户 ID：<code>%s</code>
💰 支付金额：%s 托曼
⚜️ 付款状态：%s
⭕️ 支付方式：%s 
📆 购买日期：%s',
                        'msg_user_balance_amount_add_2' => '💎 尊敬的用户，已向您的钱包余额添加 %s 托曼。',
                        'ok_success_panel_4' => '
🎁 您的优惠码创建成功。

📩 优惠码名称：<code>%s</code>
🧮 优惠码百分比：%s
🎛 面板：%s
📌  产品：%s
♻️ 用户类型：%s
🔴 使用限制：%s',
                        'ask_send_user_card_2' => '📌 请发送您不带 @ 的用户名以接收卡号

%s',
                        'msg_user_balance_amount_add_3' => '💎 尊敬的用户，已向您的钱包余额添加 %s 托曼。',
                        'msg_user_admin_balance_4' => '管理员确认卡对卡收据并手动增加余额
        
用户数字 ID：%s
用户用户名：%s
发票中的交易金额：%s
管理员存入的交易金额：%s',
                        'msg_service_user_payment_1' => '
🛒 订单编号：<code>%s</code>
🛒  机器人中的订单状态：<code>%s</code>
🙍‍♂️ 用户 ID：<code>%s</code>
👤 订阅用户名：<code>%s</code> 
📍 服务位置：%s
🛍 产品名称：%s
💰 服务支付价格：%s 托曼
⚜️ 已购买的服务流量：%s
⏳ 已购买的服务时间：%s 
📆 购买日期：%s  

',
                        'msg_service_user_link_volume' => '
  
 服务状态：%s
        
🔋 服务流量：%s
📥 已用流量：%s
💢 剩余流量：%s (%s%%)

📅 有效期至：%s (%s)

用户订阅链接： 
<code>%s</code>

📶 最后连接时间：%s
🔄 订阅链接最后更新时间：%s
#️⃣ 已连接的客户端：<code>%s</code>',
                        'msg_service_user_amount' => '
📌 服务报告 
🔗  服务类型：%s
🕰 服务执行时间：%s 

(%s)
💰服务执行金额：%s
👤 用户数字 ID：%s
👤 配置用户名：%s',
                        'err_user_delete_name' => '❌ 尊敬的用户，您使用用户名 %s 的删除请求未获批准。
        
        未批准原因：%s',
                        'msg_user_balance_amount_add_4' => '💰尊敬的用户，已向您的余额添加 %s 托曼。',
                        'err_user_balance_amount_add' => '❌ 已向用户余额添加 %s 托曼。',
                        'ok_user_delete_name_1' => '✅ 尊敬的用户，您使用用户名 %s 的删除请求已获批准。',
                        'msg_service_user_admin_1' => '⭕️ 一位管理员批准了用户提出删除请求的服务
        
批准用户的信息： 

🪪 数字 ID：<code>%s</code>
💰 退款金额：%s 托曼
👤 用户名：%s
        取消请求者的数字 ID：%s',
                        'ok_user_delete_name_2' => '✅ 尊敬的用户，您使用用户名 %s 的删除请求已获批准。',
                        'msg_user_balance_amount_add_5' => '💰尊敬的用户，已向您的余额添加 %s 托曼。',
                        'msg_service_user_admin_2' => '⭕️ 一位管理员批准了用户提出删除请求的服务
        
批准用户的信息： 

🪪 数字 ID：<code>%s</code>
💰 退款金额：%s 托曼
👤 用户名：%s
取消请求者的数字 ID：%s',
                        'ask_send_address_api' => '📌 请发送 API 地址。

当前地址：%s',
                        'btn_token_api' => '您的 api 令牌：<code>%s</code>',
                        'ok_success_panel_5' => '✅  您的网页面板已成功激活。


🔗登录地址：https://%s/panel
👤用户名：<code>%s</code>
🔑密码：<code>%s</code>

⚠️ 如果您再次点击面板激活按钮，将收到新密码。',
                        'err_error_panel_admin_name' => '
从管理面板创建配置时出错
✍️ 错误原因： 
%s
管理员 ID：%s
面板名称：%s',
                        'ask_send_user_amount_buy' => '📌 请发送您希望用户进行批量购买的最低金额。
        
当前金额：%s',
                        'msg_user_name_register_1' => '📣 一位用户提交了代理申请；请审核信息并确定状态。

数字 ID：%s
用户名：%s 
说明：%s ',
                        'msg_user_name_register_2' => '📣 一位用户提交了代理申请；请审核信息并确定状态。

数字 ID：%s
用户名：%s
说明：%s ',
                        'btn_confirm_1' => '
状态：已批准 (%s)',
                        'msg_user_name_register_3' => '📣 一位用户提交了代理申请；请审核信息并确定状态。

数字 ID：%s
用户名：%s
说明：%s ',
                        'btn_confirm_2' => '
状态：已批准 (%s)',
                        'ask_enter_merchant' => '💳 获取您的商户代码并在此部分输入
        
您当前的商户代码：%s',
                        'ok_admin_payment_delete_enable' => '
✅ 已删除 %s 个未付款订单
✅ 已删除 %s 个未激活订单。
✅ 已删除 %s 个管理员删除的订单
✅ 已删除 %s 个测试订单。',
                        'err_error_panel_account_user' => '
⭕️ 一位用户尝试获取账户，但配置创建遇到错误，未向用户提供配置
✍️ 错误原因： 
%s
用户 ID：%s
用户用户名：@%s
面板名称：%s',
                        'msg_user_admin_volume' => ' 🛍 管理员创建配置 

配置用户名：%s
配置流量：%s GB
配置时间：%s 天
管理员数字 ID：%s
管理员用户名：%s
创建数量：%s',
                        'err_error_7' => '❌  发生了错误。错误代码：%s',
                        'err_error_8' => '❌  发生了错误。错误代码：%s',
                        'err_error_9' => '❌  发生了错误。错误代码：%s',
                        'msg_api_name' => '📌 节点信息 

🖥 节点名称：%s
🌍 节点 IP：%s
🔻 节点端口：%s
🔺 节点 api 端口：%s
🔋节点总消耗：%s
🔄 节点消耗系数：%s
🔵 节点 xray 版本：%s
🟢 节点状态：%s
    
',
                        'ask_send_wallet_address' => '💳 请发送您的 Tron trc20 钱包地址
        
        您当前的钱包：%s',
                        'ask_send_api_merchant_1' => '📌 请发送您的 API 代码。
        
        您当前的商户：%s',
                        'ask_send_user_name' => '📌 请发送您不带 @ 的用户名以联系客服

%s',
                        'err_error_10' => '❌  发生了错误。错误代码：%s',
                        'err_error_11' => '❌  发生了错误。错误代码：%s',
                        'btn_user_balance_amount' => '用户 %s 的余额已重置为零',
                        'msg_user_payment_amount_date_2' => '🛒 付款编号：<code>%s</code>
🙍‍♂️ 用户 ID：<code>%s</code>
💰 支付金额：%s 托曼
⚜️ 付款状态：%s
⭕️ 支付方式：%s 
📆 购买日期：%s',
                        'err_error_12' => '❌  发生了错误。错误代码：%s',
                        'ok_service_user_volume' => '📜 您用户名为 %s 的续费发票已创建。
        
🛍 产品名称：%s
⏱ 续费时长：%s 天
🔋 续费流量：%s GB
✍️ 说明：%s
✅ 要确认并续费服务，请点击下方按钮',
                        'err_error_panel_service_user' => '
        服务续费错误
面板名称：%s
服务用户名：%s
错误原因：%s',
                        'msg_panel_service_user' => '⭕️ 管理员续费了用户的服务。
        
用户信息： 
        
🪪 管理员数字 ID：<code>%s</code>
🪪 数字 ID：<code>%s</code>
🛍 产品名称：%s
👤 客户在面板中的用户名：%s
用户服务位置：%s',
                        'msg_service_user_payment_2' => '
🛒 订单编号：%s
🛒  机器人中的订单状态：%s
🙍‍♂️ 用户 ID：%s
👤 订阅用户名：%s
📍 服务位置：%s
🛍 产品名称：%s
💰 服务支付价格：%s 托曼
⚜️ 已购买的服务流量：%s
⏳ 已购买的服务时间：%s 
📆 购买日期：%s  

',
                        'url_telegram_sendmessage' => 'https://api.telegram.org/bot%s/sendmessage?chat_id=%s&text=✅ 尊敬的用户，您的机器人已成功安装。',
                        'ok_success_user_11' => '✅ 代理机器人创建成功。
⚙️ 机器人用户名：@%s
🤠 机器人令牌：<code>%s</code>',
                        'ask_send_user_change_limit_1' => '📌  请发送用户可以更改位置的总限制次数。请注意，此限制适用于所有配置
当前限制：%s',
                        'ask_send_user_change_limit_2' => '📌  请发送用户可以免费更改位置的免费限制次数。请注意，此限制适用于所有配置
当前限制：%s',
                        'err_notfound_user_number' => '📌 数字 ID 为 %s 的用户在数据库中不存在',
                        'ask_send_time_confirm' => '📌 在此部分，您可以设置无需审核的自动批准在多少分钟后批准收据。
请以分钟为单位发送您的时间
当前时间：%s',
                        'ask_send_api_merchant_2' => '请在此部分发送收到的 api
        
您当前的商户代码：%s',
                        'msg_mini_app_instruction' => '📌 在 BotFather 机器人中激活小程序的教程

/mybots > Select Bot > Bot Setting >  Configure Mini App > Enable Mini App  > Edit Mini App URL

请按上述步骤操作，然后发送以下地址：

<code>https://%s/app/</code>',
                ],
        ],
        'textbot' => [
                'accountWallet' => '🏦 钱包 + 充值',
                'addBalance' => '💰 增加余额',
                'affiliates' => '👥 收集下线',
                'afterPay' => '✅ 服务创建成功

👤 服务用户名：{username}
🌿 服务名称：{name_service}
‏🇺🇳 位置：{location}
⏳ 时长：{day}  天
🗜 服务流量：{volume} 千兆字节

连接链接：
{config}
{links}
🧑‍🦯 您可以通过按下方按钮并选择您的操作系统来获取连接方法',
                'afterPayIbsng' => '✅ 服务创建成功

👤 服务用户名：{username}
🔑 服务密码：<code>{password}</code>
🌿 服务名称：{name_service}
‏🇺🇳 位置：{location}
⏳ 时长：{day}  天
🗜 服务流量：{volume} 千兆字节

🧑‍🦯 您可以通过按下方按钮并选择您的操作系统来获取连接方法',
                'afterText' => '✅ 服务创建成功

👤 服务用户名：{username}
🌿 服务名称：{name_service}
‏🇺🇳 位置：{location}
⏳ 时长：{day}  小时
🗜 服务流量：{volume} 兆字节

连接链接：
{config}
🧑‍🦯 您可以通过按下方按钮并选择您的操作系统来获取连接方法',
                'agentPanel' => '👨‍💻 代理面板',
                'agentRequestDesc' => '📌 请发送您的说明以提交代理申请。',
                'aqayePardakht' => '🔵 Aghaye Pardakht 网关',
                'botOff' => '❌ 机器人已关闭，请几分钟后再试',
                'cart' => '要增加余额，请将 <code>{price}</code>  托曼  存入下方账号 👇🏻
        
        ==================== 
        <code>{card_number}</code>
        {name_card}
        ====================

❌ 此交易有效期为一小时；之后无法对此交易进行付款。        
‼您必须准确存入上述金额。
‼️无法从钱包中提取资金。
‼️存款错误的责任由您承担。
🔝付款后，点击我已付款按钮，然后发送收据图片
💵您的付款经管理员批准后，您的钱包将被充值，如果您有订单，将会处理',
                'cartAuto' => '如需即时批准，请准确存入以下金额。否则，您的付款批准可能会延迟。⚠️
            要增加余额，请将 <code>{price}</code>  里亚尔  存入下方账号 👇🏻

        ==================== 
        <code>{card_number}</code>
        {name_card}
        ====================
        
💰请准确存入上述金额，以便即时批准。
‼️无法从钱包中提取资金。
🔝无需发送收据，但如果一段时间后您的存款未获批准，请发送您的收据图片。',
                'cartToCart' => '💳 卡对卡',
                'channel' => '   
        ⚠️ 尊敬的用户；您不是我们频道的成员
请通过下方按钮加入频道
加入后，点击检查成员资格按钮',
                'cryptoPayment' => '💰 使用 NowPayments 支付加密货币',
                'discount' => '🎁 礼品码',
                'extend' => '♻️ 续费服务',
                'faq' => '❓ 常见问题',
                'faqDesc' => ' 
 💡 常见问题 ⁉️

1️⃣ 你们的翻墙工具是固定 IP 吗？我可以用于加密货币交易所吗？

✅ 由于网络状况和国家限制，我们的服务不适合交易，仅提供固定位置。

2️⃣ 如果我在账户到期前续费，剩余天数会作废吗？

✅ 不会，续费时账户的剩余天数会被计入，例如如果您在 1 个月账户到期前 5 天续费，则为 5 天剩余 + 30 天续费。

3️⃣ 如果我们连接一个账户超过允许的限制会怎样？

✅ 这种情况下，您的服务流量会很快用完。

4️⃣ 你们的翻墙工具是什么类型？

✅ 我们的翻墙工具是 v2ray，我们支持各种协议，以便即使在网络受干扰期间，您也能无障碍、不降速地使用您的服务。

5️⃣ 翻墙服务器位于哪个国家？

✅ 我们的翻墙服务器位于德国

6️⃣ 我该如何使用这个翻墙工具？

✅ 有关使用应用的教程，请按 «📚 教程» 按钮。

7️⃣ 翻墙工具连不上，我该怎么办？

✅ 请连同您收到的错误消息截图一起联系客服。

8️⃣ 你们的翻墙工具能保证始终连接吗？

✅ 由于国家网络状况无法预测，无法提供保证；我们只能保证我们会尽最大努力提供尽可能好的服务。

9️⃣ 你们提供退款吗？

✅ 如果问题出在我们这边且未能解决，可以退款。

💡 如果您没有得到问题的答案，可以联系 «客服»。',
                'help' => '📚 教程',
                'iranPay1' => '💸 里亚尔支付网关',
                'iranPay2' => '💸 第二里亚尔支付网关',
                'iranPay3' => '💸 第三里亚尔支付网关',
                'manual' => '✅ 服务创建成功

👤 服务用户名：{username}
🌿 服务名称：{name_service}
‏🇺🇳 位置：{location}

 服务信息：
{config}
🧑‍🦯 您可以通过按下方按钮并选择您的操作系统来获取连接方法',
                'nowPayment' => '💰 使用 Plisio 支付加密货币',
                'nowPaymentTron' => '💵 Tron 加密货币充值',
                'paymentNotVerify' => '里亚尔网关',
                'preInvoice' => '📇 您的预开发票：
👤 用户名：{username}
🔐 服务名称：{name_product}
📆 有效期：{Service_time} 天
💶 价格：{price} 托曼
👥 账户流量：{Volume} GB
🗒 产品备注：{note}
💵 您的钱包余额：{userBalance}
          
💰 您的订单已准备好付款',
                'purchasedServices' => '🛍 我的服务',
                'requestAgent' => '👨‍💻 代理申请',
                'rules' => '
♨️ 使用我们服务的规则

1- 请务必关注频道中发布的公告。
2- 如果频道中没有发布有关中断的公告，请向客服账户发送消息
3- 请勿通过短信发送服务；如需发送，您可以通过电子邮件发送。
    
',
                'selectLocation' => '📌 请选择服务位置。',
                'sell' => '🔐 购买订阅',
                'starTelegram' => '💫 Star Telegram',
                'support' => '☎️ 客服',
                'tariffList' => '💵 订阅资费',
                'tariffListDesc' => '未设置',
                'testExpired' => '您好，尊敬的用户 
您用户名为 {username} 的测试服务已结束
我们希望您对服务的便捷和速度有良好的体验。如果您对测试服务满意，可以购买您专属的服务，享受最高质量的自由互联网😉🔥
🛍 要获取优质服务，您可以使用下方按钮',
                'userTest' => '🔑 测试账户',
                'wgDashboard' => '✅ 服务创建成功

👤 服务用户名：{username}
🌿 服务名称：{name_service}
‏🇺🇳 位置：{location}
⏳ 时长：{day}  天
🗜 服务流量：{volume} 千兆字节

🧑‍🦯 您可以通过按下方按钮并选择您的操作系统来获取连接方法',
                'wheelLuck' => '🎲 幸运转盘',
                'zarinPal' => '🟡 ZarinPal',
        ],
        'keyboard' => [
                'acceptRules' => '✅ 我接受规则',
                'accountCreateLimit' => '🚨 账户创建限制',
                'activateAccount' => '💡 开启账户',
                'activateCard' => '💳 激活卡号',
                'activateSalesBot' => '🤖 激活销售机器人',
                'activateWebPanel' => '✅ 激活网页面板',
                'activeCardUserList' => '卡号已激活的用户列表。',
                'addAdmin' => '👨‍💻 添加管理员',
                'addApp' => '🔗 添加应用',
                'addCategory' => '🛒 添加分类',
                'addChannel' => '添加频道',
                'addConfig' => '➕ 添加配置',
                'addDepartment' => '🔼 添加部门',
                'addEducation' => '📚 添加教程',
                'addOrder' => '🛒 添加订单',
                'addProduct' => '🛍 添加产品',
                'addTimeConvertVolume' => '添加时间并将总流量转换为剩余流量',
                'addTimeVolumeNextMonth' => '将时间和流量添加到下个月',
                'adminDeletedService' => '🔗 一位管理员从机器人数据库中删除了一个服务。

- 管理员数字 ID：‌{from_id}
- 管理员姓名：{first_name}
- 服务用户名：‌ {service_username}',
                'adminSection' => '👨‍🔧 管理员部分',
                'advancedAgent' => '高级代理',
                'affiliateGift' => '🎁下线',
                'affiliatesBtn' => '下线收集按钮 ',
                'agentActivated' => '请求已批准，普通代理已激活。',
                'agentCustomTextSequential' => '自定义代理文本 + 顺序编号',
                'agentExpireTime' => '⏱️ 代理到期时间',
                'agentList' => '代理列表',
                'agentLottery' => '🎁 代理抽奖',
                'agentMembershipFee' => '💰 代理会员金额',
                'agentPurchaseCap' => '代理购买上限',
                'agentTypeChanged' => '代理类型已更改为 {agent_type}。',
                'agentWheelOfLuck' => '🎲 代理幸运转盘',
                'allAgents' => '所有代理',
                'allPanels' => '所有面板',
                'allPanelsList' => '全部面板',
                'allPurchases' => '所有购买',
                'allUserList' => '所有用户列表',
                'allUsers' => '所有用户',
                'alreadyReviewed' => '此请求已由另一位管理员审核',
                'apiIranPay' => '里亚尔货币网关 api',
                'apiPlisio' => '🧩 api plisio',
                'apiT' => 'API T',
                'appDownloadLink' => '🔗 应用下载链接',
                'appDownloadLinkAlt' => '🔗应用下载链接',
                'aqayePardakhtGateway' => '🔵 Aghaye Pardakht',
                'authWithLink' => '🔑 通过链接进行身份认证',
                'authenticate' => '🔒 身份认证',
                'authenticateUser' => '用户身份认证',
                'autoConfirmNoCheck' => '🤖 无需审核批准收据',
                'autoConfirmNoCheckTime' => '⏳ 无需审核的自动批准时间',
                'autoConfirmReceipt' => '♻️ 自动批准收据',
                'back' => '返回',
                'backToAdminMenu' => '🏠 返回管理菜单',
                'backToCardSettings' => '▶️ 返回卡设置菜单',
                'backToMain' => '返回主菜单',
                'backToMainMenu' => '🔙 返回主菜单',
                'backToMainMenu2' => '🏠 返回主菜单',
                'backToNode' => '🔙 返回节点 ',
                'backToNodeList' => '🔙 返回节点列表',
                'backToPrev' => '返回上一菜单',
                'backToPrevMenu2' => '🏠 返回上一级菜单',
                'backToPreviousMenu' => '▶️ 返回上一级菜单',
                'backToServiceInfo' => '🏠 返回服务信息',
                'backToShopMenu' => '⬅️ 返回商店菜单',
                'backupError' => '❌❌❌❌❌❌ 备份出错 ',
                'baseTimePrice' => '⏳ 时间基础价格',
                'baseVolumePrice' => '🔋 流量基础价格',
                'botReport' => '📬 机器人反馈',
                'botReports' => '📣 机器人反馈',
                'both' => '两者',
                'broadcastForward' => '群发转发',
                'broadcastSend' => '群发',
                'bulkPurchase' => '🗂 批量购买',
                'bulkPurchaseStatus' => '🛍 批量购买状态',
                'buyService' => '🛍 购买服务',
                'buySubscription' => '🛍购买订阅',
                'cancelGiftSend' => '❌ 取消发送礼品',
                'cancelOperation' => '取消操作',
                'cancelPinnedMessages' => '取消置顶消息',
                'cartToCartGateway' => '🔌 卡对卡',
                'cashbackAqayePardakht' => '💰 Aghaye Pardakht 返现',
                'cashbackCartToCart' => '💰 卡对卡返现',
                'cashbackIranPay1' => '💰 里亚尔货币返现',
                'cashbackIranPay2' => '💰 第二里亚尔货币返现',
                'cashbackIranPay3' => '💰 第三里亚尔货币返现',
                'cashbackNowPayment' => '💰 nowpayment 返现',
                'cashbackPlisio' => '💰 plisio 返现',
                'cashbackStar' => '💰 Star 返现',
                'cashbackZarinPal' => '💰 ZarinPal 返现',
                'category' => '分类',
                'categoryBug' => '🐛 分类 ',
                'changeLocation' => '🌍 更改位置',
                'changeLocationLimit' => '位置更改限制',
                'changeLocationPrice' => '🌍 位置更改价格',
                'changeNodeIp' => '🌍 更改节点 IP 地址',
                'changeNodeMultiplier' => '🔄 更改节点消耗系数',
                'changeUserGroup' => '📍 更改用户组',
                'channelSettings' => '📯 频道设置',
                'chargeWallet' => '充值用户账户',
                'closeList' => '❌ 关闭列表',
                'config' => '⚙️ 配置',
                'configDetails' => '配置规格',
                'configInfo' => '⚙️ 配置信息',
                'configKeyboard' => '🔗 配置键盘',
                'configName' => '✏️配置名称',
                'configNote' => '📨 配置备注',
                'confirm' => '确认',
                'confirmAndDelete' => '确认并删除 ',
                'confirmAndStart' => '确认并开始操作',
                'confirmAndZero' => '确认并重置为零',
                'confirmDeleteService' => '✅  我想删除该服务',
                'confirmDisruptionReport' => '✅ 确认并发送中断报告',
                'confirmOptimize' => '✅ 确认并优化',
                'confirmStartProcess' => '✅ 确认并开始流程',
                'confirmTransferService' => '✅ 确认服务转移',
                'confirmed' => '✅ 已批准',
                'copyAmount' => '复制金额',
                'copyCard' => '💳 复制卡号',
                'copyCardNumber' => '复制卡号',
                'createDiscountCode' => '🎁 创建优惠码',
                'createGiftCode' => '🎁 创建礼品码',
                'cronDelete' => '❌ 删除定时任务',
                'cronDeleteVolume' => '❌ 流量删除定时任务',
                'cronFirstConnection' => '🕚 首次连接定时任务',
                'cronMessageStatus' => '🕚 定时任务消息发送状态',
                'cronTest' => '🔓测试定时任务',
                'cronTime' => '🕚 时间定时任务',
                'cronVolume' => '🔋 流量定时任务',
                'cryptoOfflinePayment' => '💵离线货币',
                'currentMonth' => '☀️ 本月 ',
                'customServiceGroupF' => '♻️ 自定义服务组 f',
                'customServiceGroupN' => '♻️ 自定义服务组 n',
                'customServiceGroupN2' => '♻️ 自定义服务组 n2',
                'customTextRandom' => '自定义文本 + 随机数',
                'customTextSequential' => '自定义文本 + 顺序编号',
                'customTimePrice' => '⏳ 自定义时间价格',
                'customUsername' => '自定义用户名',
                'customUsernameRandom' => '自定义用户名 + 随机数',
                'customVolumePrice' => '⚙️ 自定义服务流量价格',
                'customersBought' => '有购买的客户',
                'deactivateAccount' => '💡 关闭账户',
                'deactivateAccountStatus' => '❓账户停用状态',
                'deactivateCard' => '💳  停用卡号',
                'decreaseGroupPrice' => '⬇️ 批量降价',
                'deleteAllHiddenPanels' => '删除所有隐藏面板',
                'deleteAllReceipts' => '❌ 删除所有收据',
                'deleteApp' => '❌ 删除应用',
                'deleteCardNumber' => '❌ 删除卡号',
                'deleteCategory' => '❌ 删除分类',
                'deleteChannel' => '删除频道',
                'deleteConfig' => '❌ 删除配置 ',
                'deleteDepartment' => '🔽 删除部门',
                'deleteDiscountCode' => '❌ 删除优惠码',
                'deleteEducation' => '❌ 删除教程',
                'deleteGiftCode' => '❌ 删除礼品码',
                'deleteNode' => '❌ 删除节点',
                'deletePanel' => '❌ 删除面板',
                'deleteProduct' => '❌ 删除产品',
                'deleteSalesBot' => '❌ 删除销售机器人',
                'deleteService' => '❌ 删除服务',
                'deleteServiceAlt' => '❌删除服务',
                'deleteServiceFull' => '🗑 彻底删除服务',
                'deleteTime' => '⚙️ 删除时间',
                'deleteUserAffiliates' => '🔄 删除用户的下线',
                'diamondPayment' => '💎 付款',
                'disableShowCard' => '💰  停用卡号显示',
                'discountPercent' => '🎁 折扣百分比',
                'discountPercentDesc' => '📌 请发送如果用户已进行任何购买时您希望用户获得的折扣百分比。',
                'editApp' => '✏️ 编辑应用',
                'editCategory' => '编辑分类',
                'editCategoryMenu' => '✏️ 编辑分类',
                'editConfig' => '✏️ 编辑配置',
                'editDescription' => '编辑说明',
                'editEducation' => '✏️ 编辑教程',
                'editMedia' => '编辑媒体',
                'editName' => '编辑名称',
                'editPanelUrl' => '🔗 编辑面板地址',
                'editPassword' => '🔐 编辑密码',
                'editProduct' => '✏️ 编辑产品',
                'editUsername' => '👤 编辑用户名',
                'educationBtn' => '教程按钮',
                'educationCategory' => '📗教程分类',
                'educationFeature' => '教程功能',
                'educationSection' => '📚 教程部分',
                'enableShowCard' => '💰 激活卡号显示',
                'excludeUser' => '➕ 例外用户',
                'excludeUserAutoConfirm' => '💳 将用户从自动批准中排除',
                'exclusiveSubLink' => '💎 专属订阅链接',
                'exportActiveCardUsers' => '📄 导出卡号已激活的用户',
                'exportOrders' => '导出订单',
                'exportPayments' => '导出付款',
                'exportUsers' => '导出用户',
                'extraTimePrice' => '⏳ 额外时间价格',
                'extraVolumePrice' => '➕ 额外流量价格',
                'featureStatus' => '⚙️ 功能状态',
                'financial' => '💎 财务',
                'firstConnectTime' => '⚙️ 首次连接时间',
                'firstConnection' => '📊 首次连接',
                'firstConnectionTest' => '📊 测试账户首次连接',
                'firstPurchaseBtn' => '首次购买',
                'firstPurchaseCommission' => '🎉 仅首次购买返佣',
                'firstPurchaseWheel' => '🎲 首次购买幸运转盘',
                'fixed' => '固定',
                'freeLimit' => '🆓 免费限制',
                'generalLimit' => '↙️ 总限制',
                'generalSettings' => '⚙️ 通用设置',
                'getAllConfigs' => '⚙️ 获取所有配置',
                'getConfig' => '获取配置',
                'getConfigBtn' => '🔗 获取配置按钮',
                'groupCharge' => '👥 批量充值',
                'groupShowCard' => '♻️ 批量卡号显示',
                'groupVolumeOrTime' => '🔋 批量流量或时间',
                'hiddify' => 'Hiddify',
                'hidePanel' => '隐藏面板',
                'hidePanelForAgent' => '❌ 为代理隐藏某个面板',
                'hidePanelForUser' => '🫣 为某个用户隐藏面板',
                'inactiveAccount' => '📍 未激活账户',
                'inactiveDays' => '未使用的天数',
                'inboundDeactivate' => '⚙️  未激活账户入站',
                'increaseGroupPrice' => '⬆️ 批量涨价',
                'infoRefreshed' => '♻️ 信息已更新',
                'infoUpdated' => '信息已更新',
                'iranPay1Label' => '📌 第一里亚尔货币',
                'iranPay2Label' => '📌 第二里亚尔货币',
                'iranPay3Label' => '📌第三里亚尔货币',
                'lastHourStats' => '⏱️ 过去一小时',
                'lastMonth' => '⛅️ 上月',
                'locationChangeLimit' => '🌍 位置更改限制',
                'lotteryWinAmount' => '🎲 用户中奖金额',
                'manageCategory' => '🗂 分类管理',
                'manageNodes' => '🖥 节点管理',
                'manageProducts' => '🛍 产品管理',
                'manageUser' => '👤 用户管理',
                'management' => '管理',
                'manualCreateConfig' => '🔧 手动创建配置',
                'manualDelete' => '❌手动删除',
                'manualSale' => '手动销售',
                'marzban' => 'Marzban',
                'marzneshin' => 'Marzneshin',
                'maxAmountAqayePardakht' => '⬆️ Aghaye Pardakht 最高金额',
                'maxAmountCartToCart' => '⬆️ 卡对卡最高金额',
                'maxAmountCryptoOffline' => '⬆️ 离线加密货币最高金额',
                'maxAmountIranPay1' => '⬆️ 里亚尔货币最高金额',
                'maxAmountIranPay2' => '⬆️ 第二里亚尔货币最高金额',
                'maxAmountIranPay3' => '⬆️ 第三里亚尔货币最高金额',
                'maxAmountNowPayment' => '⬆️ nowpayment 最高金额',
                'maxAmountPlisio' => '⬆️ plisio 最高金额',
                'maxAmountStar' => '⬆️ Star 最高金额',
                'maxAmountZarinPal' => '⬆️ ZarinPal 最高金额',
                'maxChargeBalance' => '⬆️ 最高余额充值',
                'maxCustomTime' => '📍 自定义时间最大值',
                'maxCustomVolume' => '📍 自定义流量最大值',
                'messagingSection' => '📨 消息发送部分',
                'mikrotik' => 'MikroTik',
                'minAmountAqayePardakht' => '⬇️ Aghaye Pardakht 最低金额',
                'minAmountCartToCart' => '⬇️ 卡对卡最低金额',
                'minAmountCryptoOffline' => '⬇️ 离线加密货币最低金额',
                'minAmountIranPay1' => '⬇️ 里亚尔货币最低金额',
                'minAmountIranPay2' => '⬇️ 第二里亚尔货币最低金额',
                'minAmountIranPay3' => '⬇️ 第三里亚尔货币最低金额',
                'minAmountNowPayment' => '⬇️ nowpayment 最低金额',
                'minAmountPlisio' => '⬇️ plisio 最低金额',
                'minAmountStar' => '⬇️ Star 最低金额',
                'minAmountZarinPal' => '⬇️ ZarinPal 最低金额',
                'minBulkBalance' => '⬇️ 批量购买最低余额',
                'minChargeBalance' => '⬇️ 最低余额充值',
                'minCustomTime' => '📍 自定义时间最小值',
                'minCustomVolume' => '📍 自定义流量最小值',
                'name' => '名称',
                'nightLottery' => '🎁 夜间抽奖',
                'no' => '否',
                'nodeUptime' => '🎛 节点运行时长',
                'normalAgent' => '普通代理',
                'normalUser' => '普通用户',
                'note' => '备注',
                'numericIdRandom' => '数字 ID + 随机字母和数字',
                'numericIdSequential' => '数字 ID+顺序编号',
                'offlineGatewayPv' => '💳 私聊中的离线网关',
                'operation' => '操作',
                'optimizeBot' => '🗑 优化机器人 ',
                'paidSendReceipt' => '✅ 我已付款 | 发送收据。',
                'panelFeatureStatus' => '⚙️ 面板功能状态',
                'panelFeatures' => '🛠 面板功能',
                'panelName' => '✍️ 面板名称',
                'panelUptime' => '🎛 面板运行时长',
                'passargadPanel' => 'Pasargard',
                'payAndGetService' => '💰 付款并获取服务',
                'payment' => '支付',
                'pendingReceipts' => '💵 未批准的收据',
                'percentage' => '百分比',
                'price' => '价格',
                'productLocation' => '产品位置',
                'productName' => '产品名称',
                'purchase' => '购买',
                'purchaseBtn' => '购买按钮',
                'purchaseCommission' => '🎁 购买后返佣',
                'qrBackground' => '🖼 二维码背景',
                'quickSetTimePrice' => '⏳ 快速设置时间价格',
                'quickSetVolumePrice' => '🔋 快速设置流量价格',
                'reWebhookAgentBots' => '🔗 重新设置代理机器人 webhook',
                'receiveMembershipGift' => '🎁 领取会员礼品',
                'reconnectNode' => '♻️ 重新连接节点',
                'refresh' => '♻️ 更新',
                'refreshInfo' => '♻️ 更新信息',
                'refreshInfoAlt' => '♻️  更新信息',
                'refundBtn' => '💎 退款按钮',
                'registerDiscountCode' => '🎁 使用优惠码',
                'rejectDelete' => '❌拒绝删除',
                'rejoin' => '📌 重新加入',
                'removeFromAffiliate' => '🔄 从下线中移除',
                'removeFromHiddenList' => '❌  从隐藏列表中移除用户',
                'removeUserFromList' => '❌ 从列表中移除用户',
                'renameNode' => '🗂 重命名节点',
                'renew' => '续费',
                'renewCurrentPlan' => '♻️ 续费当前套餐',
                'renewService' => '💊 续费服务',
                'renewalCashback' => '🎁 续费返现',
                'renewalMethod' => '🔋 服务续费方式',
                'renewalStatus' => '🔋 续费状态',
                'requestApproved' => '✅请求已批准。',
                'requestNotFound' => '未找到请求的申请。',
                'requestRejected' => '✅请求已拒绝。',
                'resetAllUsersLimit' => '🔄 重置所有用户的限制',
                'resetTimeAddVolume' => '重置时间并添加之前的流量',
                'resetVolumeAddTime' => '重置流量并添加时间',
                'resetVolumeTime' => '重置流量和时间',
                'searchOrder' => '🛍 搜索订单',
                'searchUser' => '👁‍🗨 搜索用户',
                'searchUserBtn' => '🔍 搜索用户',
                'selectCurrentService' => '📍 选择当前服务',
                'selectCustomName' => '👤 选择自定义名称',
                'sendConfig' => '⚙️ 发送配置',
                'sendDepositLink' => '✅ 发送存款链接或存款图片',
                'sendDisruptionReport' => '⚠️ 发送中断报告',
                'sendMessageToSupport' => '🎟 向客服发送消息',
                'sendMessageToUser' => '✍️ 向用户发送消息',
                'sendPhoneNumber' => '☎️ 发送电话号码',
                'sendSubLink' => '⚙️ 发送订阅链接',
                'sendWithoutButton' => '无按钮发送',
                'serviceSettings' => '⚙️ 服务设置',
                'serviceStatus' => '服务状态',
                'setAffiliateBanner' => '🏞 设置下线收集横幅',
                'setAffiliatePercent' => '🧮 设置下线百分比',
                'setApi' => '设置 api',
                'setApiAddress' => '设置 api 地址',
                'setAqayePardakhtMerchant' => '设置 Aghaye Pardakht 商户',
                'setCardNumber' => '💳 设置卡号',
                'setEducationAqayePardakht' => '📚 设置 Aghaye Pardakht 网关教程',
                'setEducationCartToCart' => '📚 设置卡对卡教程',
                'setEducationCryptoOffline' => '📚 设置离线货币教程 ',
                'setEducationIranPay1' => '📚 设置第一里亚尔货币教程',
                'setEducationIranPay2' => '📚 设置第二里亚尔货币教程',
                'setEducationIranPay3' => '📚 设置第三里亚尔货币教程',
                'setEducationNowPayment' => '📚 设置 nowpayment 教程',
                'setEducationPlisio' => '📚 设置 plisio 教程',
                'setEducationStar' => '📚 设置 Star 教程',
                'setEducationZarinPal' => '📚 设置 ZarinPal 教程',
                'setFirstPrize' => '1️⃣ 设置第一名奖品',
                'setInbound' => '🎛 设置入站',
                'setInboundId' => '💎 设置入站 ID',
                'setProtocolInbound' => '⚙️ 设置协议和入站',
                'setSecondPrize' => '2️⃣ 设置第二名奖品',
                'setSupportId' => '👤 设置客服 ID',
                'setTestAccountLimitAll' => '➕ 所有人的测试账户创建限制',
                'setThirdPrize' => '3️⃣ 设置第三名奖品',
                'settings' => '⚙️ 设置',
                'settleDebt' => '💎 结清欠款',
                'shareLink' => '🔗 分享链接',
                'shopFeatureStatus' => '🛒 商店功能状态',
                'shopSettings' => '🏬 商店设置',
                'showCartAfterFirstPay' => '🔒 首次付款后显示卡对卡',
                'showDice' => '🎰 显示骰子',
                'showFirstPurchase' => '为首次购买显示',
                'showHiddenPanels' => '🗑 显示隐藏的面板',
                'showPanel' => '🖥 显示面板',
                'showProductPrice' => '💰 显示产品价格',
                'showTestAccount' => '🎁 显示测试',
                'showUserList' => '👁 显示人员列表',
                'start' => '开始',
                'startBtn' => '开始按钮',
                'startGift' => '🎁 启动礼品',
                'startGiftAmount' => '🌟 启动礼品金额',
                'statsAtDate' => '🗓 查看特定日期的统计',
                'supportId' => '👤 客服 ID',
                'supportInPv' => '👤 私聊客服',
                'supportSection' => '🤙 客服部分',
                'testAccountBtn' => '测试账户按钮',
                'testAccountFeature' => '测试账户功能',
                'testAccountLimit' => '➕ 测试账户限制',
                'testAccountVolume' => '💾 测试账户流量',
                'testServiceTime' => '⏳ 测试服务时间',
                'time' => '时间',
                'timeAlert' => '⚙️ 警告时间',
                'timeDuration' => '⏳ 时间',
                'today' => '⛅️ 今天',
                'totalStats' => '⏱️ 总统计',
                'transactionDeleted' => '交易已被删除',
                'transferAccount' => '转移用户账户 ',
                'unauthUser' => '用户未认证',
                'userAffiliates' => '👥 用户的下线',
                'userId' => '标识',
                'userManagement' => '用户管理',
                'userManagementBtn' => '⚙️ 用户管理',
                'userNote' => '📨 普通用户备注',
                'userType' => '用户类型',
                'username' => '用户名',
                'usernameMethod' => '💡 用户名生成方式',
                'usernameSequential' => '用户名 + 顺序编号',
                'usersBought' => '有购买的用户',
                'usersGroupF' => 'f 组用户',
                'usersGroupN' => 'n 组用户',
                'usersGroupN2' => 'n2 组用户',
                'usersNotBought' => '无购买的用户',
                'usersWithAffiliates' => '有下线的用户列表。',
                'usersWithBalance' => '有余额的用户列表。',
                'usersWithNegativeBalance' => '余额为负的用户列表',
                'verifyChannelMembership' => '📑 频道成员资格验证',
                'viewAccountInfoFeature' => '账户信息查看功能',
                'viewInfo' => '查看信息',
                'viewTutorial' => '📚 查看使用教程 ',
                'volume' => '流量',
                'volume2' => '🔋 流量',
                'volumeAlert' => '⚙️ 警告流量',
                'volumeResetType' => '流量重置类型',
                'walletAddress' => '钱包地址',
                'wheelOfLuck' => '🎲 幸运转盘',
                'yes' => '是',
                'yesterday' => '☀️ 昨天',
                'zarinPalGateway' => '🟡 ZarinPal',
                'zarinPalMerchant' => 'ZarinPal 商户',
                'zeroBalance' => '0️⃣ 余额清零',
        ],
        'language' => [
                'changeButton' => '🌏 切换语言',
                'selectPrompt' => '🌏 请选择您想要的语言。',
                'setSuccess' => '✅ 语言设置成功',
        ],
        'extracted' => [
                'admin_php' => [
                        'panelNotFound' => '❌ 未找到所需的面板。',
                        'panelErrorCode' => '❌ 发生错误，错误代码：%s',
                        'selectPanelForOrder' => '📌 请从下方列表中选择该订单将在哪个面板上创建',
                        'panelSelectedSuccess' => '✅ 面板选择成功',
                        'serverStatus' => '🖥 <b>服务器状态</b>

⚙️ <b>处理器</b>
├ 使用率: <code>{cpu}%</code>
├ 核心: <code>{cpuCores}</code> (逻辑: {logicalPro})
└ 频率: <code>{cpuSpeed} GHz</code>

📊 <b>系统负载</b> (1/5/15 分钟)
└ <code>{load1} | {load5} | {load15}</code>

🧠 <b>内存</b>
└ <code>{memUsed} / {memTotal}</code> ({memPercent}%)

💾 <b>磁盘</b>
└ <code>{diskUsed} / {diskTotal}</code> ({diskPercent}%)

🌐 <b>网络 (实时)</b>
├ 上传: <code>{netUp}/s</code>
└ 下载: <code>{netDown}/s</code>

📡 <b>总流量</b>
├ 已发送: <code>{netSent}</code>
└ 已接收: <code>{netRecv}</code>

🔌 <b>连接数</b>
└ TCP: <code>{tcp}</code> | UDP: <code>{udp}</code>

🛡 <b>Xray</b>
├ 状态: <code>{xrayState}</code>
└ 版本: <code>{xrayVersion}</code>

🏷 <b>面板版本:</b> <code>{panelVersion}</code>
⏱ <b>运行时间:</b> <code>{uptime}</code>

🔗 <b>公网 IP</b>
├ IPv4: <code>{ipv4}</code>
└ IPv6: <code>{ipv6}</code>',
                        'xuiErrorCode' => '❌ 发生错误。错误代码：  ',
                        'xuiErrorReason' => '❌ 发生错误。原因：  ',
                        'xrayActive' => '🟢 运行中',
                        'xrayStopped' => '🔴 已停止',
                        'ipNone' => '无',
                        'eylanErrorCode' => '❌  发生错误。错误代码：  %s',
                        'eylanUserNotExist' => '❌ 用户在面板中不存在。',
                        'eylanPanelOutput' => '面板输出：',
                ],
                'keyboard_php' => [
                        'panelSetting' => '🎛 面板设置',
                        'mirzaAgentPanel' => 'Mirza 代理',
                        'setGroupName' => '🎛 设置群组名称',
                        'subLinkDomain' => '🔗 订阅链接域名',
                        'panelTypeSanaei' => 'Sanaei 单端口',
                        'panelTypeAlireza' => 'Alireza 单端口',
                        'usernameMethodAgentCustom' => '自定义代理文本 + 顺序编号',
                        'currencyToman' => '托曼',
                ],
                'index_php' => [
                        'langBtnFa' => '🇮🇷 فارسی',
                        'langBtnEn' => '🇬🇧 English',
                        'langBtnZh' => '🇨🇳 中文',
                        'langBtnRu' => '🇷🇺 Русский',
                        'acceptRulesButton' => '✅ 我接受规则',
                        'affiliateBalanceGift' => '🎁 来自用户 ID 为 {from_id} 的下线，金额 {addbalancediscount} 已添加到您的余额。',
                        'unlimited' => '无限制',
                        'dayUnit' => '天',
                        'remainingSuffix' => ' 其他',
                        'statusOnline' => '在线',
                        'statusOffline' => '离线',
                        'statusNotConnected' => '未连接',
                        'servicesFound' => '🛍 找到 {countservice} 个服务。要查看和管理服务，请点击其中一个服务',
                        'accountInfoUnavailable' => '❌ 目前无法查看账户信息',
                        'servicePassword' => '🔑 您的服务密码：<code>{subscription_url}</code>',
                        'configNote' => '✍️ 配置备注：{note}',
                        'lastOnlineTime' => '📶 您的最后连接时间：{lastonline}',
                        'subscriptionFile' => '您的订阅文件',
                        'turnOffAccountButton' => '❌ 关闭账户',
                        'turnOnAccountButton' => '💡 开启账户',
                        'editNoteButton' => '📝 更改备注',
                        'refreshInfoButton' => '♻️ 更新信息',
                        'serviceDeletedSuccess' => '📌 服务删除成功',
                        'askDeleteReason' => '📌 请发送删除您服务的原因。',
                        'configReadError' => '❌  读取配置信息出错。请联系客服。',
                        'selectConfigFromList' => '📌 请从下方列表中选择并使用一个配置。',
                        'featureUnavailable' => '❌ 此功能目前不可用',
                        'featureUnavailableDot' => '❌ 此功能目前不可用。',
                        'notConnectedCannotChangeStatus' => '❌ 您尚未连接到配置，无法更改服务状态。连接到配置后，您可以使用此功能。',
                        'confirmDisableConfigButton' => '✅ 确认并停用配置',
                        'confirmEnableConfigButton' => '✅ 确认并启用配置',
                        'renewError' => '❌ 续费遇到错误；请重新执行续费步骤。',
                        'renewNotSupportedPanel' => '❌ 此面板无法续费',
                        'notConnectedConnectFirst' => '❌ 您尚未连接到服务。要续费服务，请先连接到服务，然后再续费',
                        'renewNotPossibleCurrentPlan' => '❌ 无法使用当前套餐续费。请从头执行各步骤并选择其他套餐。',
                        'renewGenericError' => '❌ 发生了错误。请从头执行续费步骤。',
                        'renewServiceError' => '❌ 续费服务时发生错误；请联系客服',
                        'renewProcessRestartError' => '❌ 续费服务时发生错误；请联系客服',
                        'customVolumeButton' => '🛍 自定义流量',
                        'customServiceButton' => '⚙️ 自定义服务',
                        'currencyToman' => '托曼',
                        'invalidVolume' => '❌ 流量无效。
🔔 最小流量为 {mainvolume} GB，最大流量为 {maxvolume} GB',
                        'invalidTime' => '❌ 提交的时间无效。时间必须在 {maintime} 天到 {maxtime} 天之间',
                        'discountCodeExpired' => '❌ 优惠码时间已过期。',
                        'discountCodeUseLimit' => '⭕️ 此码仅可使用 {useuser}  次',
                        'discountCodeAppliedRenew' => '🤩 您的优惠码有效，发票已应用 {discount_price}% 折扣。',
                        'discountCodeApplied' => '🤩 您的优惠码有效，发票已应用 {discount_price}% 折扣。',
                        'discountCodeUsedNoticeRenew' => '⭕️ 用户名为 @{username}、数字 ID 为 {from_id} 的用户使用了优惠码 {discount_code}，并续费了其服务。',
                        'discountCodeUsedNotice' => '⭕️ 用户名为 @{username}、数字 ID 为 {from_id} 的用户使用了优惠码 {discount_code}。',
                        'discountCodeNotAllowed' => '❌ 无法使用此优惠码购买',
                        'earned2Points' => '📌您获得了 2 个新积分。',
                        'earned1Point' => '📌您获得了 1 个新积分。',
                        'serviceInactiveCannotChangeLink' => '❌ 服务已停用，无法更改服务链接。',
                        'changeLinkError' => '❌ 更改链接时发生错误。',
                        'configUpdatedSuccess' => '✅ 您的配置更新成功。',
                        'subscriptionLine' => '您的订阅：<code>{output_config_link}</code>',
                        'extraVolumeNotSupportedPanel' => '❌ 此面板无法购买额外流量',
                        'purchaseError' => '❌ 购买失败。请重新执行各步骤。',
                        'extraVolumeServiceError' => '❌为服务购买额外流量时发生错误。请联系客服',
                        'locationChangeLimitReached' => '❌ 您的位置更改限制已用完',
                        'genericProcessRestart' => '❌ 发生了错误。请重新执行各步骤',
                        'transferToPanelNotPossible' => '❌ 无法转移到面板。',
                        'configUnusedCannotTransfer' => '❌ 您的配置处于未使用状态，无法转移服务位置。',
                        'requestSubmittedSuccess' => '✅ 感谢您提交请求。您的请求已发送，正在由客服审核。',
                        'extraTimeNotSupportedPanel' => '❌ 此面板无法购买额外时间',
                        'serviceTransferredNotice' => '✅ 尊敬的用户，用户名为 {service_username} 的服务已由用户 ID 为 {from_id} 的用户转移到您的账户。',
                        'testServiceUnavailable' => '📌 测试服务目前不可用。',
                        'serviceStockFinished' => '❌ 此服务的流量已用完。',
                        'serviceStockFinishedBuyAnother' => '❌ 此服务的流量已用完。请购买其他服务。',
                        'selectCategoryShort' => '📌 请选择一个分类',
                        'selectCategory' => '📌 请选择您的分类！',
                        'buttonDisabled' => '❌ 此按钮已停用',
                        'buttonDisabledForYou' => '❌ 此按钮对您已停用',
                        'selectSupportDepartment' => '📌 请选择您要发送消息的客服部分。',
                        'sendYourMessage' => '📌 请发送您的消息',
                        'messageSentForReview' => '✅ 您的消息发送成功，审核后将给您回复。',
                        'messageAnsweredByOtherAdmin' => '❌ 该消息已由另一位管理员回复。',
                        'sendMessageText' => '📌 请发送您的消息文本',
                        'messageSentSuccess' => '消息发送成功',
                        'messageSentForRequestReview' => '✅  您针对此请求的消息发送成功。审核后将给您回复。',
                        'notSentLabel' => '❌<b> 未发送 </b>❌',
                        'confirmedByAdmin' => '✅ 已由管理员批准',
                        'roleNormal' => '普通',
                        'roleAgent' => '代理',
                        'roleAdvancedAgent' => '高级代理',
                        'accountScore' => '🥅 您的账户积分：{score}',
                        'panelUnavailableUseAnother' => '❌ 此面板不可用。请从其他面板进行购买。',
                        'confirmError' => '❌ 确认过程中发生错误。请重新执行付款步骤',
                        'purchaseRestartProcess' => '❌ 请重新执行购买步骤',
                        'creatingService' => '♻️ 正在创建您的服务...',
                        'purchaseRestartFromStart' => '❌ 请从头重新执行购买步骤',
                        'firstPurchaseLabel' => '📌 用户首次购买',
                        'bulkPurchaseDisabled' => '❌ 此部分当前已停用',
                        'bulkPurchaseMinBalance' => '❌ 批量购买您必须至少有 {PaySetting} 托曼余额。',
                        'depositAmountRange' => '❌ 此支付方式的最低存款金额必须为 {mainbalance}，最高为 {maxbalance} 托曼',
                        'depositAmountRangePlisio' => '❌ 此支付方式的最低存款金额必须为 {mainbalance}，最高为 {maxbalance} 托曼',
                        'bankCardRetrieveError' => '❌ 检索银行卡时发生内部错误。请稍后再试。',
                        'noActiveBankCard' => '❌ 未找到此支付方式的有效银行卡。请稍后再试或联系客服。',
                        'receiptCooldown' => '❗ 您在过去 2 分钟内已发送收据。请 2 分钟后再发送新收据。',
                        'transactionAlreadyConfirmed' => '❗️ 您的交易已由机器人批准。',
                        'transactionExpired' => '❗此交易的时间已过期，无法对此交易进行付款。',
                        'sendReceiptImage' => '🖼 请发送您的收据图片',
                        'sendReceiptOrTronLink' => '📌 请发送您的存款图片或 Tron 交易链接。',
                        'purchaseOrPaymentRestart' => '❌ 发生了错误。请重新执行购买或付款步骤',
                        'infoFetchErrorRestart' => '❌ 检索信息时发生错误。请从头执行各步骤',
                        'onlyOneImageAllowed' => '❌  您只能发送一张图片',
                        'receiptSentRenewPending' => '🚀 您的收据已发送，审核后将续费您的服务',
                        'receiptSentExtraVolumePending' => '🚀 您的收据已发送，审核后将为您的服务添加流量。',
                        'receiptSentExtraTimePending' => '🚀 您的收据已发送，审核后将为您的服务添加时间',
                        'sectionDisabledNow' => '📛 此部分当前已停用',
                        'notAffiliateOfAnyone' => '📛 您不是任何用户的下线。',
                        'affiliateJoinedGift' => '🎉 有人通过您的推荐加入了！礼品已充值到您的账户。',
                        'affiliateJoinGiftActivated' => '🎉 会员礼品已为您激活！',
                        'noPurchaseUsersOnly' => '❌ 很遗憾，此选项仅对未从机器人购买过的用户有效。',
                        'gameResultError' => '❌ 获取游戏结果时出错。请稍后再试。',
                        'priceFetchError' => '❌ 目前无法获取价格。请稍后再试。',
                        'genericErrorRestart' => '❌ 发生了错误。请从头执行各步骤',
                ],
        ],
        'hardcoded' => [
                'accountCreateReportAdmin' => '📣 账户创建详情已记录在您的机器人中。

%s
▫️用户数字 ID：<code>%s</code>
▫️用户用户名：@%s
▫️配置用户名：%s
▫️用户姓名：%s
▫️服务位置：%s
▫️产品名称：%s
▫️已购买时间：%s 天
▫️已购买流量：%s GB
▫️购买前余额：%s 托曼
▫️购买后余额：%s 托曼
▫️跟踪码：%s
▫️用户类型：%s
▫️用户电话号码：%s
▫️产品分类：%s
▫️产品价格：%s 托曼
▫️最终价格：%s 托曼
▫️购买时间：%s',
                'accountCreateReportAfterPay' => '📣 付款后账户创建详情已记录在机器人中。

%s
▫️用户数字 ID：<code>%s</code>
▫️用户用户名：@%s
▫️配置用户名：%s
▫️服务位置：%s
▫️已购买时间：%s 天
▫️已购买产品名称：%s
▫️已购买流量：%s GB
▫️购买前余额：%s 托曼
▫️购买后余额：%s 托曼
▫️跟踪码：%s
▫️用户类型：%s
▫️用户电话号码：%s
▫️产品价格：%s 托曼
▫️最终价格：%s 托曼
▫️购买时间：%s',
                'accountCreateReportMiniapp' => '📣 账户创建详情已记录在小程序中。
        
%s
▫️用户数字 ID：<code>%s</code>
▫️用户用户名：@%s
▫️配置用户名：%s
▫️服务位置：%s
▫️产品名称：%s
▫️已购买时间：%s 天
▫️已购买流量：%s GB
▫️购买前余额：%s 托曼
▫️购买后余额：%s 托曼
▫️跟踪码：%s
▫️用户类型：%s
▫️用户电话号码：%s
▫️产品分类：%s
▫️产品价格：%s 托曼
▫️购买时间：%s',
                'accountInfoText' => '
🗂 您的账户信息：


🪪 用户 ID：<code>%s</code>
👤 姓名：<code>%s</code>
👨‍👩‍👦 您的推荐码：<code>%s</code>
📱 联系号码：%s
⌚️注册时间：%s
💰 余额：%s 托曼
🛒 已购买的服务数量：%s 个
📑 已支付的发票数量：%s 个
🤝 您的下线数量：%s 人
🔖 用户组：%s
%s
%s

📆 %s → ⏰ %s
                    
',
                'accountNotVerifiedNotice' => '⚠️ 您的账户未认证。您的消息已发送给管理员。
    为更快跟进，您可以向以下 ID 发送消息
    @%s',
                'accountUnblockedNotice' => '✳️ 您的账户已解除封禁 ✳️
现在您可以使用机器人了 ✔️',
                'accountVerifiedNotice' => '💎 尊敬的用户，您的账户认证成功，现在可以进行购买',
                'accountVerifiedSuccess' => '您的账户认证成功',
                'adminUserDeletedService' => '尊敬的管理员，一位用户在其流量或时间结束后删除了服务
配置用户名：%s',
                'affiliateCommissionPaidLog' => '
金额 %s 已作为来自用户 %s 的佣金充值给用户 %s 
时间：%s',
                'affiliateCommissionPaidLog2' => '
金额 %s 已作为来自用户 %s 的佣金充值给用户 %s 
时间：%s',
                'affiliateCommissionPaidLogFn' => '
金额 %s 已作为来自用户 %s 的佣金充值给用户 %s 
时间：%s',
                'affiliateCommissionPaidLogFn2' => '
金额 %s 已作为来自用户 %s 的佣金充值给用户 %s 
时间：%s',
                'affiliateCommissionPaidLogMiniapp' => '
    金额 %s 已作为来自用户 %s 的佣金充值给用户 %s 
    时间：%s',
                'affiliateCommissionPaidLogMiniapp2' => '
金额 %s 已作为来自用户 %s 的佣金充值给用户 %s 
时间：%s',
                'affiliateCommissionPaidUser' => '🎁  佣金支付 
        
        来自您下线的金额 %s 托曼已充值到您的钱包',
                'affiliateCommissionPaidUser2' => '🎁  佣金支付 
        
        来自您下线的金额 %s 托曼已充值到您的钱包',
                'affiliateCommissionPaidUserFn' => '🎁  佣金支付 
        
        来自您下线的金额 %s 托曼已充值到您的钱包',
                'affiliateCommissionPaidUserFn2' => '🎁  佣金支付 
        
        来自您下线的金额 %s 托曼已充值到您的钱包',
                'affiliateCommissionPaidUserMiniapp' => '🎁  佣金支付 
            
            来自您下线的金额 %s 托曼已充值到您的钱包',
                'affiliateCommissionPaidUserMiniapp2' => '🎁  佣金支付 
        
        来自您下线的金额 %s 托曼已充值到您的钱包',
                'affiliateNewReferralJoined' => '<b>🎉 一个新下线！</b>
用户 <b>@%s</b> 通过您的邀请链接加入了机器人 ✅

通过此用户的购买，<b>您的礼品份额</b>将充值到您的账户 🔥',
                'affiliateWelcomeGiftInfo' => '<b>💼 下线收集与欢迎礼品</b>

通过您的<b>专属链接</b>邀请朋友，无需支付 1 里亚尔即可充值您的钱包，并使用机器人的服务！

%s
%s

<b>📊 您的统计：</b>
• 👥 下线：%s 人
• 🛒 购买：%s 个
• 💵 总购买额：%s 托曼

<b>📢 邀请，获得礼品，成长！</b>
',
                'affiliateWelcomeInvited' => '<b>🎉 欢迎！</b>

您通过 <b>@%s</b> 的邀请加入了机器人，并被登记为下线 ✅

要领取会员礼品：
🔘 进入<b>下线收集</b>菜单  
🔘 点击 <b>🎁 领取会员礼品</b> 按钮

这样，您和您的推荐人都能获得礼品！ 💰
',
                'agentExpiredGroupChangedLog' => '📌 由于代理到期，用户的用户组已更改为 f

用户数字 ID：%s
用户用户名：‌ %s',
                'agentExpiredNotice' => '📌 尊敬的代理，您的代理期限已结束，您的账户已退出代理状态。要重新激活代理，您可以联系客服。',
                'amountRangeError' => '❌ 错误 
💬 金额必须至少 %s 托曼，最多 %s 托曼',
                'aqayePardakhtLinkError' => '⭕️ 创建 Aghaye Pardakht 链接出错
✍️ 错误原因：%s
            
用户 ID：%s
用户用户名：@%s',
                'autoConfirmedByBot' => '由机器人无需审核批准',
                'backupDatabaseCaption' => '📌 主机器人数据库导出 ',
                'balanceAddedNotice' => '💎 尊敬的用户，已向您的钱包余额添加 %s 托曼。',
                'balanceChargedThanks' => '💎 尊敬的用户，金额 %s 托曼已充值到您的钱包。感谢您的付款。
                
🛒 您的跟踪码：%s',
                'balanceDeductedNotice' => '❌ 尊敬的用户，已从您的钱包余额中扣除 %s 托曼。',
                'balanceLessThanPrice' => '余额少于产品价格',
                'botActivatedTelegramUrl' => 'https://api.telegram.org/bot%s/sendmessage?chat_id=%s&text=✅ 尊敬的用户，您的机器人已成功安装。',
                'bulkAccountCreateError' => '
⭕️ 批量部分创建账户出错
✍️ 错误原因： 
%s
用户 ID：%s
用户用户名：@%s
面板名称：%s',
                'bulkAccountReportAdmin' => '📣 批量账户创建详情已记录在您的机器人中。
▫️用户数字 ID：<code>%s</code>
▫️用户用户名：@%s
▫️配置用户名：%s_0-%s
▫️用户姓名：%s
▫️服务位置：%s
▫️产品名称：%s
▫️已购买时间：%s 天
▫️已购买流量：%s GB
▫️购买前余额：%s 托曼
▫️购买后余额：%s 托曼
▫️跟踪码：%s
▫️用户类型：%s
▫️用户电话号码：%s
▫️产品价格：%s 托曼
▫️最终价格：%s 托曼
▫️配置数量：%s 个
▫️购买时间：%s',
                'bulkMessageDone' => '📌 操作已对所有请求的用户执行。',
                'bulkMessageProgress' => '✏️ 消息发送操作正在进行中...

剩余人数：%s',
                'cardPaymentInstruction' => '如需付款，请将金额存入下方卡号',
                'changeLinkReportAdmin' => '📣 链接更改详情已记录在您的机器人中。
▫️用户数字 ID：<code>%s</code>
▫️用户用户名：@%s
▫️配置用户名：%s
▫️用户姓名：%s
▫️服务位置：%s
▫️用户类型：%s
▫️链接更改时间：%s',
                'changeLocationConfirmPrompt' => '📍 确认服务位置转移后，您的服务将从此位置删除并转移到新位置。
💰 转移费用为 %s 托曼
📌 您的剩余限制：%s（剩余免费限制：‌%s）

✅ 要确认转移，请点击下方按钮',
                'changeLocationError' => '更改服务位置时出错
错误原因： 
%s
用户 ID：%s
用户用户名：@%s
面板名称：%s
目标面板名称：%s',
                'changeLocationReportAdmin' => '  
服务位置更改 

🔻数字 ID：<code>%s</code>
🔻用户名：@%s
🔻旧面板名称：%s
🔻新面板名称：%s
🔻 客户在面板中的用户名：%s
🔻最终服务流量：%s
🔻用户余额：%s 托曼',
                'changeLocationSuccess' => '✅ 您的配置已成功转移到服务器 (%s)。

🖥 服务名称：%s
💠 服务流量：%s
⏳ 到期时间：%s | %s 


🔗 您的订阅链接： 

<code>%s</code>',
                'configCreateError' => '
⭕️ 创建配置出错
✍️ 错误原因： 
%s
用户 ID：%s
用户用户名：@%s
面板名称：%s',
                'configCreateErrorAdminPanel' => '
从管理面板创建配置时出错
✍️ 错误原因： 
%s
管理员 ID：%s
面板名称：%s',
                'confirmDisableConfigPrompt' => '📌 确认下方选项后，您的配置将被关闭，您将无法再连接到该配置。
⚠️ 如果您希望重新激活配置，必须从服务管理部分点击 <u>💡 开启账户</u> 按钮',
                'confirmEnableConfigPrompt' => '📌 确认下方选项后，您的配置将被开启，您将能够连接到该配置。
⚠️ 如果您希望再次停用配置，必须从服务管理部分点击 <u>❌ 关闭账户</u> 按钮',
                'confirmedByAdmin' => '✅ 已由管理员批准',
                'cryptoPaymentInstruction' => '
<b>💲 要通过加密货币充值您的钱包余额，请点击消息末尾的付款按钮</b>

⚠️ 注意：付款时间为 30 分钟；30 分钟后交易将被取消

🌐 一些购买加密货币的国内网站 👇
🔸 nikpardakht.com
🔹 webpurse.org
🔸 bitpin.ir
🔹 sarmayex.com
🔸 ok-ex.io
🔹 nobitex.ir
🔸 bitbarg.com
🔹 cafearz.com
🔸 pay98.app
🔢 发票编号：%s
💰 发票金额：%s 托曼
📊 美元价格：截至此刻 %s 托曼

请使用下方按钮付款👇🏻',
                'cryptoPaymentInstruction2' => '
<b>💲 要通过加密货币充值您的钱包余额，请点击消息末尾的付款按钮</b>

⚠️ 注意：付款时间为 30 分钟；30 分钟后交易将被取消

🌐 一些购买加密货币的国内网站 👇
🔸 nikpardakht.com
🔹 webpurse.org
🔸 bitpin.ir
🔹 sarmayex.com
🔸 ok-ex.io
🔹 nobitex.ir
🔸 bitbarg.com
🔹 cafearz.com
🔸 pay98.app
🔢 发票编号：%s
💰 发票金额：%s 托曼
📊 美元价格：截至此刻 %s 托曼


<blockquote>⚠️ 付款后，如果交易金额已正确存入，您的余额将在接下来最多 15 分钟内自动充值。</blockquote>


请使用下方按钮付款👇🏻',
                'cryptoPaymentLinkErrorAdmin' => '
                        ⭕️ 一位用户打算使用货币网关付款，但创建付款链接遇到错误，未向用户提供链接
✍️ 错误原因：%s
            
用户 ID：%s
用户用户名：@%s',
                'cryptoPaymentLinkErrorAdmin2' => '
                        ⭕️ 一位用户打算使用货币网关付款，但创建付款链接遇到错误，未向用户提供链接
✍️ 错误原因：%s
            
用户 ID：%s
用户用户名：@%s',
                'customServiceLabel' => '⚙️ 自定义服务',
                'customTimePrompt' => '⌛️ 请选择您的服务时间 
📌 每天费率：%s  托曼
⚠️ 您最少可购买 %s 天，最多 %s 天',
                'customTimePrompt2' => '⌛️ 请选择您的服务时间 
📌 每天费率：%s  托曼
⚠️ 您最少可购买 %s 天，最多 %s 天',
                'customUsernameLabel' => '自定义用户名',
                'customUsernameRandomLabel' => '自定义用户名 + 随机数',
                'customVolumePrompt' => '📌 请发送您请求的流量。
🔔每 GB 流量价格为 %s 托曼。
🔔 最小流量为 %s GB，最大流量为 %s GB。',
                'customVolumePrompt2' => '📌 请发送您请求的流量。
🔔每 GB 流量价格为 %s 托曼。
🔔 最小流量为 %s GB，最大流量为 %s GB。',
                'customVolumePrompt3' => '📌 请发送您请求的流量。
🔔每 GB 流量价格为 %s 托曼。
🔔 最小流量为 %s GB，最大流量为 %s GB。',
                'customVolumePrompt4' => '📌 请发送您请求的流量。
🔔每 GB 流量价格为 %s 托曼。
🔔 最小流量为 %s GB，最大流量为 %s GB。',
                'customVolumePrompt5' => '📌 请发送您请求的流量。
🔔每 GB 流量价格为 %s 托曼。
🔔 最小流量为 %s GB，最大流量为 %s GB。',
                'dailyBotReport' => '📌 机器人每日运行报告：

🧲 今日续费数量：%s 个
💰 今日续费总额：%s 托曼
🛍 今日订单数量：%s 个
🛍 今日订单总金额：%s 托曼
🔑 今日测试账户：%s 个
🔋 已售流量总和：%s GB
今日加入机器人的用户数量：%s 人

',
                'dailyPanelReportRow' => '
面板名称：%s
🛍 今日订单数量：%s 个
🛍 今日订单总金额：%s 托曼
🔋 已售流量总和：%s GB
---------------

',
                'dailyPanelsReportTitle' => '面板报告：

',
                'dailyTopAgentRow' => '
用户数字 ID：%s
用户用户名：%s
今日总购买额：%s
---------------

',
                'dailyTopAgentsTitle' => '今日购买最多的代理列表：

',
                'debtPaymentRequired' => '❌ 您有欠款；您必须至少支付 %s 托曼。
         请重新发送您的金额',
                'deleteServiceRequestAdmin' => '管理员您好 👋
        
📌 一位用户向您发送了服务删除请求。请审核，如果正确且您同意，请批准。 
        
        
📊 用户服务信息：
用户数字 ID：%s
用户用户名：@%s
配置用户名：%s
服务状态：%s
服务位置：%s
服务代码：%s

🟢 您的最后连接时间：%s

📥 已用流量：%s
♾ 服务流量：%s
🪫 剩余流量：%s
📅 有效期至：%s (%s)


<b>❌ 尊敬的管理员请注意，您点击的删除服务按钮由机器人自动计算，可能存在错误，建议使用手动删除</b>

服务删除原因：%s',
                'discountCodeUsedAdmin' => '⭕️ 用户名为 @%s、数字 ID 为 %s 的用户使用了优惠码 %s。',
                'discountCodeUsedAdminFn' => '⭕️ 用户名为 @%s、数字 ID 为 %s 的用户使用了优惠码 %s。',
                'disruptionReportAdmin' => '
    ⚠️ 具有以下信息的用户提交了服务中断报告。

- 用户名：@%s
- 数字 ID：%s
- 配置用户名：%s
- 已购买套餐名称：%s
- 服务位置：%s
- 中断说明：%s',
                'disruptionReportConfirmPrompt' => '❓ 您确定要发送中断报告吗

🔹 发送报告前，请查看连接教程。( /help )',
                'disruptionReportPrompt' => '❓ 请写下您中断的原因

🔹 发送报告前，请查看连接教程。( /help )',
                'enterAmountToman' => '💸 请输入金额（托曼）：

⚠️  最低金额为 <b>%s</b>，最高为 <b>%s</b> 托曼',
                'extraTimeError' => '购买额外流量出错
面板名称：%s
服务用户名：%s
错误原因：%s',
                'extraTimeErrorFn' => '购买额外流量出错
面板名称：%s
服务用户名：%s
错误原因：%s',
                'extraTimeInvoiceCreated' => '📜 已为您创建额外时间购买发票。
        
📌 额外时间每天费率：%s 托曼
📆 请求的额外天数：%s 天
💰 您的发票金额：%s 托曼
        
✅ 要付款并添加时间，请点击下方按钮',
                'extraTimePrompt' => '📆 请输入所需的额外天数（以天为单位）：
        
📌 每天费率：%s',
                'extraTimeReportAdmin' => '⭕️ 一位用户购买了额外时间
        
用户信息： 
🪪 数字 ID：%s
🛍 已购买时间：%s 天
💰 支付金额：%s 托曼
👤 配置用户名：%s',
                'extraTimeReportAdminFn' => '⭕️ 一位用户购买了额外时间
        
用户信息： 
🪪 数字 ID：%s
🛍 已购买时间：%s 天
💰 支付金额：%s 托曼
👤 配置用户名 %s',
                'extraTimeSuccess' => '✅ 已成功为您的服务添加时间
 
▫️服务名称：%s
▫️添加时间：%s 天

▫️增加时间金额：%s 托曼',
                'extraTimeSuccessFn' => '✅ 已成功为您的服务添加时间
 
▫️服务名称：%s
▫️添加时间：%s 天

▫️增加时间金额：%s 托曼',
                'extraVolumeError' => '购买额外流量出错
面板名称：%s
服务用户名：%s
错误原因：%s',
                'extraVolumeError2' => '购买额外流量出错
面板名称：%s
服务用户名：%s
错误原因：%s',
                'extraVolumeErrorFn' => '购买额外流量出错
面板名称：%s
服务用户名：%s
错误原因：%s',
                'extraVolumeInvoiceCreated' => '📜 已为您创建额外流量购买发票。
        
📌 额外流量每 GB 费率：%s 托曼
🔋 请求的额外流量：%s GB
💰 您的发票金额：%s 托曼
        
✅ 要付款并添加流量，请点击下方按钮',
                'extraVolumePrompt' => ' ⭕️ 请发送您要购买的流量。
❌ 请用英文发送金额。
        ⚠️ 每 GB 额外流量为 %s 托曼。',
                'extraVolumeReportAdmin' => '⭕️ 一位用户购买了额外流量
        
用户信息： 
🪪 数字 ID：%s
🛍 已购买流量：%s GB
💰 支付金额：%s 托曼
👤 配置用户名：%s
购买前用户余额：%s

',
                'extraVolumeReportAdminFn' => '⭕️ 一位用户购买了额外流量
        
用户信息： 
🪪 数字 ID：%s
🛍 已购买流量：%s GB
💰 支付金额：%s 托曼
👤 配置用户名 %s
购买前用户余额：%s

',
                'extraVolumeSuccess' => '✅ 已成功为您的服务添加流量
 
▫️服务名称：%s
▫️添加流量：%s GB

▫️增加流量金额：%s 托曼',
                'extraVolumeSuccessFn' => '✅ 已成功为您的服务添加流量
 
▫️服务名称：%s
▫️添加流量：%s GB

▫️增加流量金额：%s 托曼',
                'firstPurchaseLabel' => '📌 用户首次购买',
                'gatewayPerfectMoney' => 'Perfect Money',
                'gatewayRialName1' => '里亚尔货币支付',
                'gatewayRialName2' => '第二里亚尔货币支付',
                'getConfigHint' => '📌 要获取配置，请点击获取配置按钮',
                'giftDepositNotice' => '🎁 尊敬的用户，%s 托曼已作为礼物存入您的账户。',
                'giftOperationDone' => '📌 操作已对所有请求的服务执行。',
                'giftVolumeAddError' => '添加礼品流量出错
面板名称：%s
服务用户名：%s
错误原因：%s',
                'giftVolumeAddError2' => '添加礼品流量出错
面板名称：%s
服务用户名：%s
错误原因：%s',
                'invalidTimeRestart' => '时间无效。请从头进行购买',
                'invalidVolumeRestart' => '流量无效。请从头进行购买',
                'invoiceExpiredNotice' => '⭕️ 尊敬的用户，以下发票因未在指定时间内付款而过期。
❗️请在任何情况下都不要为此发票支付任何金额，并重新创建发票。

🛒 您的支付方式：%s
📌 发票代码：<code>%s</code>
🪙 发票金额：%s 托曼',
                'iranpayGiftDepositNotice' => '🎁 尊敬的用户，%s 托曼已作为礼物存入您的账户。',
                'iranpayNewPaymentLog' => '💵 新付款
- 👤 用户用户名：@%s
- 🆔用户数字 ID：%s
- 💸 交易金额 %s
- 💳 支付方式：第三里亚尔货币',
                'lotteryAdminReport' => '📌 尊敬的管理员，以下用户赢得了抽奖，其账户已充值。

',
                'lotteryWinnerNotice' => '🎁 抽奖结果 

😎 尊敬的用户，恭喜！您是第 %s 名，赢得了 %s 托曼余额，您的账户已充值。',
                'lotteryWinnerRow' => '
用户名：@%s
数字 ID：%s
金额：%s
第几名：%s
--------------',
                'membershipGiftAlreadyClaimed' => '<b>⛔ 您已领取过会员礼品。</b>
此礼品仅可激活<b>一次</b>。',
                'membershipGiftInfo' => '<b>🎁 会员礼品：</b>
• 🎉 礼品总额：%s 托曼  
• 🔻 50% 给您（推荐人）  
• 🔻 50% 给下线（新用户）

',
                'membershipGiftPaidLog' => '🎁 会员礼品支付
 -数字 ID：%s
 - 用户名：@%s
 - 推荐人数字 ID：%s
 - 下线礼品前余额：%s
 - 下线礼品后余额：%s
  - 推荐人礼品前余额：%s
 - 推荐人礼品后余额：%s
 ',
                'messageFromAdmin' => '
📩 管理层向您发送了一条消息。
                    
消息内容： 
%s',
                'newPaymentAdmin' => '💵 新付款
                
用户数字 ID：%s
交易金额：%s 
支付方式：第一里亚尔货币网关',
                'newPaymentAutoConfirm' => '💵 新付款
        
用户数字 ID：%s
交易金额 %s
支付方式：无需审核的自动批准
%s',
                'newPaymentBalanceCharge' => '
⭕️ 已进行一笔新付款。
余额增加            
👤 用户账户名称：%s
👤 用户 ID：<a href = "tg://user?id=%s">%s</a>
💸 用户当前余额：%s 托曼
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💵 用户总付款次数：%s 个
💸 支付金额：%s 托曼
                
说明：%s %s
✍️ 如果收据正确，请批准付款。',
                'newPaymentBalanceCharge2' => '
⭕️ 已进行一笔新付款。
余额增加            
👤 用户账户名称：%s
👤 用户 ID：<a href = "tg://user?id=%s">%s</a>
💸 用户当前余额：%s 托曼
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💸 支付金额：%s 托曼
                
✍️ 如果收据正确，请批准付款。',
                'newPaymentBalanceChargeFn' => '⭕️ 已进行一笔新付款
        余额增加。
👤 用户 ID：<code>%s</code>
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💸 支付金额：%s 托曼
💎 增加前余额：%s
✍️ 说明：%s',
                'newPaymentExtraTime' => '
⭕️ 已进行一笔新付款。

⭕️⭕️⭕️⭕️⭕️
购买额外时间
服务用户名：%s
已购买天数：%s
👤 用户账户名称：%s
👤 用户 ID：<a href = "tg://user?id=%s">%s</a>
💸 用户当前余额：%s 托曼
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💵 用户总付款次数：%s 个
💸 支付金额：%s 托曼
                
说明：%s %s
✍️ 如果收据正确，请批准付款。',
                'newPaymentExtraTime2' => '
⭕️ 已进行一笔新付款。

⭕️⭕️⭕️⭕️⭕️
购买额外时间
服务用户名：%s
已购买天数：%s
👤 用户账户名称：%s
👤 用户 ID：<a href = "tg://user?id=%s">%s</a>
💸 用户当前余额：%s 托曼
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💸 支付金额：%s 托曼
                
✍️ 如果收据正确，请批准付款。',
                'newPaymentExtraVolume' => '
⭕️ 已进行一笔新付款。

⭕️⭕️⭕️⭕️⭕️
购买额外流量
服务用户名：%s
已购买流量：%s
👤 用户账户名称：%s
👤 用户 ID：<a href = "tg://user?id=%s">%s</a>
💸 用户当前余额：%s 托曼
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💵 用户总付款次数：%s 个
💸 支付金额：%s 托曼
                
说明：%s %s
✍️ 如果收据正确，请批准付款。',
                'newPaymentExtraVolume2' => '
⭕️ 已进行一笔新付款。

⭕️⭕️⭕️⭕️⭕️
购买额外流量
服务用户名：%s
已购买流量：%s
👤 用户账户名称：%s
👤 用户 ID：<a href = "tg://user?id=%s">%s</a>
💸 用户当前余额：%s 托曼
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💸 支付金额：%s 托曼
                
✍️ 如果收据正确，请批准付款。',
                'newPaymentNewService' => '
⭕️ 已进行一笔新付款。

⭕️⭕️⭕️⭕️⭕️
购买新服务

服务用户名：%s
产品名称：%s
产品流量：%s GB 
产品时间：%s 天
👤 用户账户名称：%s
👤 用户 ID：<a href = "tg://user?id=%s">%s</a>
💸 用户当前余额：%s 托曼
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💵 用户总付款次数：%s 个
💸 支付金额：%s 托曼
                
说明：%s %s
✍️ 如果收据正确，请批准付款。',
                'newPaymentNewService2' => '
⭕️ 已进行一笔新付款。

⭕️⭕️⭕️⭕️⭕️
购买新服务

服务用户名：%s
产品名称：%s
产品流量：%s GB 
产品时间：%s 天
👤 用户账户名称：%s
👤 用户 ID：<a href = "tg://user?id=%s">%s</a>
💸 用户当前余额：%s 托曼
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💸 支付金额：%s 托曼
                
✍️ 如果收据正确，请批准付款。',
                'newPaymentRenew' => '
⭕️ 已进行一笔新付款。

⭕️⭕️⭕️⭕️⭕️
续费
服务用户名：%s
产品名称：%s
👤 用户账户名称：%s
👤 用户 ID：<a href = "tg://user?id=%s">%s</a>
💸 用户当前余额：%s 托曼
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💵 用户总付款次数：%s 个
💸 支付金额：%s 托曼
                
说明：%s %s
✍️ 如果收据正确，请批准付款。',
                'newPaymentRenew2' => '
⭕️ 已进行一笔新付款。

⭕️⭕️⭕️⭕️⭕️
续费
服务用户名：%s
产品名称：%s
👤 用户账户名称：%s
👤 用户 ID：<a href = "tg://user?id=%s">%s</a>
💸 用户当前余额：%s 托曼
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💸 支付金额：%s 托曼
                
✍️ 如果收据正确，请批准付款。',
                'nodeDownNotice' => '🚨 尊敬的管理员，名为 %s 的节点未连接。
节点状态：%s
✍️ 错误原因：<code> %s</code>',
                'notConnectedLabel' => '未连接',
                'notifDeleteCronInfo' => '📌 删除定时任务通知

服务用户名：‌ <code>%s</code>
服务状态：%s
剩余天数‌:‌%s
剩余流量：%s',
                'notifGreeting' => '您好，尊敬的用户 👋

',
                'notifGreeting2' => '您好，尊敬的用户 👋

',
                'notifRemainingDays' => '剩余天数‌:‌%s',
                'notifRemainingVolume' => '剩余流量：%s',
                'notifServiceDeleted' => '📌 尊敬的用户，由于未续费，服务 %s 已从您的服务列表中删除

🌟 要获取新服务，请从购买服务部分进行操作',
                'notifServiceDeleted2' => '📌 尊敬的用户，由于未续费，服务 %s 已从您的服务列表中删除

🌟 要获取新服务，请从购买服务部分进行操作',
                'notifServiceStatus' => '服务状态：%s

',
                'notifServiceStatus2' => '服务状态：%s

',
                'notifServiceUsername' => '服务用户名：‌ <code>%s</code>

',
                'notifServiceUsername2' => '服务用户名：‌ <code>%s</code>

',
                'notifThanks' => '感谢您的陪伴',
                'notifTimeActionHint' => '如果您希望续费此服务，请通过«%s»部分进行操作。 ',
                'notifTimeCronTitle' => '📌 时间定时任务通知


',
                'notifTimeRemaining' => '📌 使用服务 %s 的期限仅剩 %s 天。 ',
                'notifVolumeActionHint' => '请，如有需要，通过«%s»部分购买额外流量或续费您的服务',
                'notifVolumeCronTitle' => '📌 流量定时任务通知


',
                'notifVolumeDeleteCronInfo' => '📌  流量删除定时任务通知 
服务用户名：%s 
 服务状态：%s 
剩余天数：%s 
 剩余流量：%s
用户最后连接：%s',
                'notifVolumeRemaining' => '🚨 服务 %s 的流量仅剩 %s。 ',
                'offlineLabel' => '离线',
                'onHoldReminderNotice' => '您好！🌐

我们注意到您尚未连接到用户名为 %s 的配置，距其激活已超过 %s 天。如果您在设置或使用服务时遇到任何问题，请通过以下 ID 联系我们的客服团队，以便我们为您提供帮助。
我们随时准备解决任何问题！📞

客服账户：@%s',
                'onlineLabel' => '在线',
                'panelDownNotice' => '🚨 尊敬的管理员，名为 <code>%s</code> 的面板未连接。',
                'paymentConfirmedExtraTime' => '✅ 付款已批准
🔋 购买额外时间
🛍 已购买时间：%s 天
👤 配置用户名 %s
👤 用户 ID：<code>%s</code>
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💎 增加前余额：%s
💸 支付金额：%s 托曼

',
                'paymentConfirmedExtraVolume' => '✅ 付款已批准
🔋 购买额外流量
🛍 已购买流量：%s GB
👤 配置用户名 %s
👤 用户 ID：<code>%s</code>
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💎 增加前余额：%s
💸 支付金额：%s 托曼

',
                'paymentConfirmedNewService' => '✅ 付款已批准
 🛍购买服务 
 ▫️配置用户名：%s
▫️服务位置：%s
👤 用户 ID：<code>%s</code>
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💎 购买前余额：%s
💸 支付金额：%s 托曼
✍️ 说明：%s


',
                'paymentConfirmedRenew' => '✅ 付款已批准
🔋 续费服务
🪪 配置用户名：%s
🛍 产品名称：%s
🌏 位置名称：%s
👤 用户 ID：<code>%s</code>
🛒 付款跟踪码：%s
⚜️ 用户名：@%s
💎 续费前余额：%s
💸 支付金额：%s 托曼
✍️ 说明：%s


',
                'paymentInvoiceCreated' => '✅ 已创建付款发票。

🔢 发票编号：%s
💰 发票金额：%s 托曼

❌ 此交易有效期为一小时；之后无法对此交易进行付款。        

📌请在付款且交易成功后稍等片刻，直到您在我们的网站收到付款成功消息。否则，您的账户将不会被充值。

请使用下方按钮付款👇🏻',
                'paymentInvoiceCreated2' => '
✅ 已创建付款发票。
            
🔢 发票编号：%s
💰 发票金额：%s 托曼

❌ 此交易有效期为一天；之后无法对此交易进行付款。        

📌请在付款且交易成功后稍等片刻，直到您在我们的网站收到付款成功消息。否则，您的账户将不会被充值。

请使用下方按钮付款👇🏻',
                'paymentLinkErrorAdmin' => '
⭕️ 一位用户打算付款，但创建付款链接遇到错误，未向用户提供链接
✍️ 错误原因：%s

用户 ID：%s
支付方式：%s
用户用户名：@%s',
                'paymentLinkErrorAdmin2' => '
                        ⭕️ 一位用户打算付款，但创建付款链接遇到错误，未向用户提供链接
✍️ 错误原因：%s
            
用户 ID：%s
支付方式：%s
用户用户名：@%s',
                'paymentLinkErrorAdmin3' => '
⭕️ 一位用户打算付款，但创建付款链接遇到错误，未向用户提供链接
✍️ 错误原因：%s
            
用户 ID：%s
支付方式：%s
用户用户名：@%s',
                'paymentQueueBusyNotice' => '支付网关队列中的人数极多 📊

‼️目前请使用其他支付方式',
                'plisioGiftDepositNotice' => '🎁 尊敬的用户，%s 托曼已作为礼物存入您的账户。',
                'plisioNewPaymentLog' => '💵 新付款
- 👤 用户用户名：@%s
- 🆔用户数字 ID：%s
- 💸 交易金额 %s
- 🔗 <a href = "%s">付款链接 </a>
- 🔗 <a href = "%s">plisio 付款链接 </a>
- 📥 已存入的 Tron 金额：%s
- 💳 支付方式：plisio',
                'plisioTransactionExpired' => '❌ 以下交易因未付款而过期。请不要为此交易支付任何金额

🛒 订单代码：%s
💰 金额：%s 托曼',
                'pointsEarned1' => '📌您获得了 1 个新积分。',
                'pointsEarned2' => '📌您获得了 2 个新积分。',
                'pointsEarned2b' => '📌您获得了 2 个新积分。',
                'preInvoiceText' => '
📇 您的预开发票：
👤 用户名：<code>%s</code>
🔐 服务名称：%s
📆 有效期：%s 天
💶 原价：<del>%s 托曼</del>
💶 折后价：%s  托曼
👥 账户流量：%s GB
💵 您的钱包余额：%s
                  
        💰 您的订单已准备好付款。  ',
                'preInvoiceText2' => '
📇 您的预开发票：
👤 用户名：<code>%s</code>
🔐 服务名称：%s
📆 有效期：%s 天
💶 价格：%s  托曼
👥 账户流量：%s GB
💵 您的钱包余额：%s
⭕️配置数量：%s
                  
💰 您的订单已准备好付款。  ',
                'purchaseCommissionInfo' => '<b>💸 购买佣金：</b>  
•  下线购买金额的 %s% 归您所有',
                'receiptNotSent' => '🔴 未发送 🔴',
                'referralLinkText' => '

🔗 用于验证下线的推荐链接：
https://t.me/%s?start=%s',
                'renewGenericError' => '❌ 续费过程中发生错误。请联系客服',
                'renewGiftCharged' => '恭喜 🎉
📌 作为续费礼品，金额 %s 托曼已充值到您的账户',
                'renewGiftChargedFn' => '恭喜 🎉
📌 作为续费礼品，金额 %s 托曼已充值到您的账户',
                'renewInvoiceCreated' => '📜 您用户名为 %s 的续费发票已创建。
        
🛍 产品名称：%s
💸 续费金额：%s 托曼
⏱ 续费时长：%s 天
🔋 续费流量：%s GB
✍️ 说明：%s
💸 钱包余额：%s
✅ 要确认并续费服务，请点击下方按钮',
                'renewInvoiceCreated2' => '📜 您用户名为 %s 的续费发票已创建。
        
🛍 产品名称：%s
💸 续费金额：%s
⏱ 续费时长：%s 天
🔋 续费流量：%s GB
✍️ 说明：%s
💸 钱包余额：%s

✅ 要确认并续费服务，请点击下方按钮',
                'renewReportAdmin' => '📣 账户续费详情已记录在您的机器人中。
    
▫️用户数字 ID：<code>%s</code>
▫️用户用户名：@%s
▫️配置用户名：%s
▫️用户姓名：%s
▫️服务位置：%s
▫️产品名称：%s
▫️产品流量：%s
▫️产品时间：%s
▫️续费金额：%s 托曼
▫️购买前余额：%s 托曼
▫️购买后余额：%s 托曼
▫️购买时间：%s',
                'renewReportAdminFn' => '📣 账户续费详情已记录在您的机器人中。
    
▫️用户数字 ID：<code>%s</code>
▫️用户用户名：@%s
▫️配置用户名：%s
▫️服务位置：%s
▫️产品名称：%s
▫️产品流量：%s
▫️产品时间：%s
▫️续费金额：%s 托曼
▫️购买前余额：%s 托曼
▫️购买时间：%s',
                'renewServiceError' => '服务续费错误
面板名称：%s
服务用户名：%s
错误原因：%s',
                'renewServiceError2' => '服务续费错误
        面板名称：%s
        服务用户名：%s
        错误原因：%s',
                'renewServiceErrorApi' => '
        服务续费错误
面板名称：%s
服务用户名：%s
错误原因：%s',
                'renewServiceErrorFn' => '
        服务续费错误
面板名称：%s
服务用户名：%s
错误原因：%s',
                'renewServiceGenericErrorApi' => '❌ 续费服务时发生错误；请联系客服',
                'renewServiceSuccess' => '✅ 您的服务续费成功
 
▫️服务名称：%s
▫️产品名称：%s
▫️续费金额 %s 托曼

',
                'renewServiceSuccess2' => '✅ 您的服务续费成功
 
▫️服务名称：%s
▫️产品名称：%s
▫️续费金额 %s 托曼

',
                'renewServiceSuccessFn' => '✅ 您的服务续费成功
 
▫️服务名称：%s
▫️产品名称：%s
▫️续费金额 %s 托曼

',
                'roleAdvancedAgent' => '高级代理',
                'roleAgent' => '代理',
                'roleNormal' => '普通',
                'selectedPanelInactive' => '所选面板当前未激活',
                'selectedPanelMissing' => '所选面板不存在。',
                'selectedProductNotFound' => '未找到所选产品',
                'serviceConnectionInfo' => '
📶 最后连接时间：%s
🔄 订阅链接最后更新时间：%s
#️⃣ 已连接的客户端：<code>%s</code>',
                'serviceCreateFailedRefund' => '💎  尊敬的用户，由于服务未创建，金额 %s 托曼已添加到您的钱包。',
                'serviceCreatedSuccess' => '✅ 服务创建成功

👤 服务用户名：{username}
🌿 服务名称：{name_service}
‏🇺🇳 位置：{location}
⏳ 时长：{day}  小时
🗜 服务流量：{volume} 兆字节

🧑‍🦯 您可以通过按下方按钮并选择您的操作系统来获取连接方法',
                'serviceCreatedSuccess2' => '✅ 服务创建成功

👤 服务用户名：{username}
🌿 服务名称：{name_service}
‏🇺🇳 位置：{location}
⏳ 时长：{day}  天
🗜 服务流量：{volume} 千兆字节

🧑‍🦯 您可以通过按下方按钮并选择您的操作系统来获取连接方法',
                'serviceInfoBasic' => '服务状态：<b>%s</b>
服务用户名：%s
📎 服务跟踪码：%s

📌 服务信息： 
%s',
                'serviceInfoDetailed' => '服务状态：<b>%s</b>
👤 服务用户名：<code>%s</code>
🌍 服务位置：%s
产品名称：%s

📶 您的最后连接时间：%s

🔋 流量：%s
📥 已用流量：%s
💢 剩余流量：%s (%s%%)

📅 到期日期：%s (%s)

%s',
                'serviceInfoFull' => '📊服务状态：%s
👤 服务名称：<code>%s</code>
%s
%s
🌍 服务位置：%s
🗂 产品名称：%s

🔋 流量：%s
📥 已用流量：%s
💢 剩余流量：%s (%s%%)

📅 到期日期：%s (%s)

%s

💡 要切断他人的访问，只需点击“更改链接”选项。',
                'serviceNoteChangedAdmin' => '📌  一位用户更改了其服务备注。

▫️ 服务用户名：%s
▫️ 之前的备注：‌ %s
▫️ 新备注：‌  %s

备注更改时间：%s ',
                'serviceRenewFailedRefund' => '💎  尊敬的用户，由于服务未续费，金额 %s 托曼已添加到您的钱包。',
                'serviceStatusSummary' => '
  
 服务状态：%s
        
🔋 服务流量：%s
📥 已用流量：%s
💢 剩余流量：%s (%s%%)

📅 有效期至：%s (%s)

用户订阅链接： 
<code>%s</code>

📶 最后连接时间：%s
🔄 订阅链接最后更新时间：%s
#️⃣ 已连接的客户端：<code>%s</code>',
                'serviceTimePrompt' => '⌛️ 请选择您的服务时间 
📌 每天费率：%s  托曼
⚠️ 您最少可购买 %s 天，最多 %s 天',
                'serviceVolumePrompt' => '🔋 请输入所需的服务流量（以 GB 为单位）：
📌 每 GB 费率：%s 
🔔 最小流量为 1 GB，最大为 1000 GB。',
                'starInvoiceError' => '
创建 Star 发票时出错
✍️ 错误原因：%s
            
用户 ID：%s
支付方式：%s
用户用户名：@%s',
                'subscriptionCreateError' => '⭕️ 创建订阅出错
✍️ 错误原因：
%s
用户 ID：%s
用户用户名：@%s
面板名称：%s',
                'subscriptionCreateErrorAdmin' => '⭕️ 创建订阅出错 
✍️ 错误原因： 
%s
用户 ID：%s
用户用户名：@%s
面板名称：%s',
                'subscriptionCreateErrorApi' => '❌ 创建订阅时发生错误；要解决此问题，请在您的报告群组中查看错误原因',
                'subscriptionCreateGenericError' => '创建订阅时发生错误。请联系客服',
                'supportMessageFromUser' => '
    📣 尊敬的客服，一位用户向您发送了一条消息。

用户数字 ID：<a href = "tg://user?id=%s">%s</a>
发送时间：%s
消息状态：未回复
用户用户名：@%s    
部门名称：%s

消息内容：%s %s',
                'supportMessageFromUser2' => '
    📣 尊敬的客服，一位用户向您发送了一条消息。

用户数字 ID：<a href = "tg://user?id=%s">%s</a>
发送时间：%s
消息状态：客户回复
用户用户名：@%s    
部门名称：%s

消息内容：%s',
                'testAccountCreateError' => '
⭕️ 一位用户打算获取测试账户，但创建配置遇到错误，未向用户提供配置
✍️ 错误原因： 
%s
用户 ID：%s
用户用户名：@%s
面板名称：%s',
                'testAccountReportAdmin' => '📣 测试账户创建详情已记录在您的机器人中。
▫️用户数字 ID：<code>%s</code>
▫️用户用户名：@%s
▫️配置用户名：%s
▫️用户姓名：%s
▫️服务位置：%s
▫️已购买时间：%s 小时
▫️已购买流量：%s MB
▫️跟踪码：%s
▫️用户类型：%s
▫️用户电话号码：%s
▫️购买时间：%s',
                'testLabel' => '测试',
                'testServiceName' => '测试服务',
                'testServiceName2' => '测试服务',
                'testServiceName3' => '测试服务',
                'testServiceName4' => '测试服务',
                'testServiceName5' => '测试服务',
                'testServiceNameFn' => '测试服务',
                'transactionCreated' => '✅ 您的交易已创建
        
🛒 跟踪码：<code>%s</code> 
💲 交易金额（托曼）：<code>%s</code>


💢 付款前请注意以下事项 👇
        
❌ 此交易有效期为 24 小时；之后无法对此交易进行付款。        


✅ 如有问题，您可以联系客服',
                'transactionCreated2' => '✅ 您的交易已创建
        
🛒 跟踪码：<code>%s</code> 
💲 交易金额（托曼）：<code>%s</code>

💢 付款前请注意以下事项 👇
        
🔹 交易有效期为一天，之后即使付款也不会被批准。
❌ 交易后需要 15 分钟到一小时才能批准交易

✅ 如有问题，您可以联系客服',
                'transactionCreated3' => '✅ 您的交易已创建
        
🛒 跟踪码：<code>%s</code> 
💲 交易金额（托曼）：<code>%s</code> 托曼


💢 付款前请注意以下事项 👇
        
❌ 此交易有效期为一天；之后无法对此交易进行付款。        

✅ 如有问题，您可以联系客服',
                'transactionCreatedStar' => '✅ 您的交易已创建

🛒 跟踪码：<code>%s</code>
💲 交易金额：%s ⭐（相当于 %s 托曼）

📌 请将 %s 托曼兑换为 Telegram Stars 并存入。

💢 付款前的重要事项： 👇
🔹 每笔交易有效期为 1 天；过期后请勿存入。

✅ 如有问题，请联系客服。',
                'transactionCreatedTron' => '✅ 您的交易已创建

🛒 跟踪码：<code>%s</code>
🌐 网络：TRX - Tron
💳 钱包地址：<code>%s</code>

📌 请向上述钱包地址存入 <code>%s</code> TRX，然后点击下方按钮并发送收据。

💢 付款前请注意以下事项 👇
🔸 如果钱包地址输入错误，交易将不被批准，且无法退款。
🔹 发送的金额不得少于或多于规定金额。
🔹 如果存入超过规定金额，无法补加差额。
🔹 每笔交易有效期为一小时，收到交易过期消息后，请在任何情况下都不要向钱包发送任何金额。

✅ 如有问题，您可以联系客服。',
                'unitByte' => '字节',
                'unitGig' => 'GB',
                'unitGigabyte' => '千兆字节',
                'unitGigabyteFn' => '千兆字节',
                'unitKilobyte' => '千字节',
                'unitMegabyte' => '兆字节',
                'unitTerabyte' => '太字节',
                'unknownLabel' => '未知',
                'unlimitedLabel' => '无限制',
                'userBlockedByApiLog' => '数字 ID 为 %s 的用户已在机器人中被封禁 
执行管理员：api site',
                'userUnblockedByApiLog' => '数字 ID 为 %s 的用户已在机器人中被解封 
执行管理员：api site',
                'usernameExistsRestart' => '用户名已存在。请从头执行各步骤',
                'zarinpalLinkError' => '⭕️ 创建 ZarinPal 链接出错
✍️ 错误原因：%s
            
用户 ID：%s
用户用户名：@%s',
        ],
        'db_defaults' => [
                'namecardNotSet' => '未设置',
                'departmanGeneral' => '☎️ 公共部分',
        ],
        'panel' => [
                'configInvalidRequest' => '无效请求。',
                'configRoleAll' => '完全访问权限',
                'configRoleDefault' => '普通用户',
                'configRoleN' => '代理',
                'configRoleN2' => '高级代理',
                'dashActiveService' => '活跃服务',
                'dashColAmount' => '金额',
                'dashColBalance' => '余额',
                'dashColGroup' => '组',
                'dashColId' => '标识',
                'dashColName' => '名称',
                'dashColProduct' => '产品',
                'dashColStatus' => '状态',
                'dashColUser' => '用户',
                'dashLabelBlocked' => '已封禁',
                'dashNoChange' => '无更改',
                'dashNoOrdersYet' => '未登记订单',
                'dashNoUsersYet' => '未登记用户',
                'dashPendingPayment' => '付款待处理',
                'dashRecentItem' => '最近项目',
                'dashRecentItem2' => '最近项目',
                'dashRecentOrders' => '最新订单',
                'dashRecentUsers' => '最新用户',
                'dashReviewLink' => '<a href="payment.php" style="color:var(--no)">查看 ←</a>',
                'dashStatusActive' => '活跃',
                'dashStatusExpired' => '已过期',
                'dashStatusRegistered' => '已登记',
                'dashStatusVolumeFinished' => '流量已用完',
                'dashStatusWaiting' => '等待中',
                'dashStatusWarning' => '警告',
                'dashTodaySpan' => ' 今天</span>',
                'dashTodayTransaction' => '今日交易',
                'dashTomanShort' => '托',
                'dashTomanShort2' => '托',
                'dashTotalRevenue' => '总收入',
                'dashTotalSales' => '总销售额',
                'dashTotalUsers' => '用户总数',
                'dashUnitMillionToman' => '<small>M 托</small>',
                'dashUnitToman' => '<small>托</small>',
                'dashViewAll' => '全部 ←',
                'dashViewAll2' => '全部 ←',
                'dashboardTitle' => '仪表盘',
                'invoiceAllStatuses' => '所有状态',
                'invoiceClearBtn' => '清除',
                'invoiceColDate' => '状态',
                'invoiceColPanel' => '从',
                'invoiceColPrice' => '价格',
                'invoiceColProduct' => '产品',
                'invoiceColService' => '记录 · 页',
                'invoiceColStatus' => '日期',
                'invoiceColTrackingCode' => '托',
                'invoiceColUser' => '用户',
                'invoiceDataFetchError' => '获取信息出错',
                'invoiceDbError' => '数据库错误：',
                'invoiceNoOrderFound' => '未找到符合此搜索的订单',
                'invoiceNoOrderYet' => '尚未登记订单',
                'invoiceNotifAllSent' => '发送所有通知',
                'invoiceNotifNotConnectedSent' => '已发送未连接通知',
                'invoiceNotifTimeExpire' => '时间结束通知',
                'invoiceNotifVolumeExpire' => '流量结束通知',
                'invoiceOrdersHeading' => '订单',
                'invoiceOrdersSubtitle' => '机器人中所有已登记订单的列表。',
                'invoiceOrdersTitle' => '订单',
                'invoiceSearchBtn' => '搜索',
                'invoiceSearchOrderPlaceholder' => '用户 ID、产品名称...',
                'invoiceStatusActive' => '活跃',
                'invoiceStatusUnpaid' => '未付款',
                'jsConfirmDefault' => '此操作不可逆。继续？',
                'jsConfirmMsg' => '您确定吗？',
                'jsConfirmTitle' => '确认操作',
                'jsPwExcellent' => '优秀',
                'jsPwGood' => '良好',
                'jsPwMedium' => '中等',
                'jsPwMinHint' => '至少 6 个字符',
                'jsPwVeryWeak' => '非常弱',
                'jsPwWeak' => '弱',
                'jsSidebarCollapsed' => '已启用折叠菜单',
                'jsSidebarExpanded' => '已启用展开菜单',
                'jsThemeActivated' => '主题«{name}»已启用',
                'keyboardManageTitle' => '米尔扎机器人管理面板',
                'keyboardSaveBtn' => '返回默认模式',
                'keyboardSortHint' => '返回用户面板',
                'layoutBrandName' => '米尔扎机器人管理面板',
                'layoutDefaultAdminName' => '管理员',
                'layoutFooterCopyright' => '仪表盘',
                'layoutFooterLinkDocs' => '设置',
                'layoutFooterLinkSupport' => '交易',
                'layoutFooterPoweredBy' => '订单',
                'layoutFooterVersion' => '用户',
                'layoutMenuSectionFinancial' => '服务',
                'layoutMenuSectionMain' => '用户',
                'layoutMenuSectionManagement' => '订单',
                'layoutMenuSectionSystem' => '产品',
                'layoutMobileMenuLabel' => '面板管理员',
                'layoutNavDashboard' => '确认操作',
                'layoutNavKeyboard' => '通用',
                'layoutNavLogout' => '管理',
                'layoutNavOrders' => '是，继续',
                'layoutNavPayments' => '· 面板',
                'layoutNavProducts' => '米尔扎',
                'layoutNavServices' => '取消',
                'layoutNavSettings' => '仪表盘',
                'layoutNavUsers' => '您确定吗？此操作不可逆。',
                'layoutNotificationsLabel' => '退出',
                'layoutPageTitleDashboard' => '仪表盘',
                'layoutPageTitleInvoice' => '订单',
                'layoutPageTitleKeyboard' => '布局',
                'layoutPageTitleLogout' => '退出',
                'layoutPageTitlePayment' => '交易',
                'layoutPageTitleProduct' => '产品',
                'layoutPageTitleService' => '服务',
                'layoutPageTitleSettings' => '设置',
                'layoutPageTitleSuffix' => '米尔扎',
                'layoutPageTitleUsers' => '用户',
                'layoutProfileMenuLabel' => '设置',
                'layoutSearchBoxPlaceholder' => '交易',
                'layoutSidebarToggleLabel' => '面板',
                'layoutThemeToggleLabel' => '键盘布局',
                'loginButton' => '登录面板',
                'loginEnterCredentials' => '请输入用户名和密码。',
                'loginErrorTitle' => '密码',
                'loginFooter' => '用户名',
                'loginHeading' => '米尔扎管理面板',
                'loginHidePassword' => '只有授权管理员才能访问此面板。',
                'loginPanelTitle' => '登录 — 米尔扎管理面板',
                'loginPasswordLabel' => '米尔扎管理面板',
                'loginPasswordPlaceholder' => '· 版本 1.0 米尔扎',
                'loginRememberMe' => '要管理机器人，请输入您的账户信息。',
                'loginShowPassword' => '登录面板',
                'loginSubtitle' => '为了支持，请前往 ',
                'loginTooManyAttempts' => '失败尝试次数过多。请等待 15 分钟。',
                'loginUsernameLabel' => '项目',
                'loginUsernamePlaceholder' => '点赞并
          捐赠',
                'loginWelcomeBack' => '欢迎，',
                'loginWrongCredentials' => '用户名或密码错误。',
                'paymentAllMethods' => '自活动开始以来',
                'paymentAllStatuses' => '托曼',
                'paymentClearBtn' => '交易记录',
                'paymentCloseBtn' => '从',
                'paymentColAmount' => '今日新交易',
                'paymentColAuthority' => '用户',
                'paymentColDate' => '清除',
                'paymentColDescription' => '交易 ID',
                'paymentColMethod' => '交易报告',
                'paymentColStatus' => '所有状态',
                'paymentColTrackingCode' => '搜索',
                'paymentColUser' => '今天',
                'paymentDbErrorTransactions' => '读取交易时数据库错误：',
                'paymentDetailAmount' => '日期',
                'paymentDetailDate' => '记录 · 页',
                'paymentDetailMethod' => '状态',
                'paymentDetailStatus' => '未找到交易',
                'paymentDetailTrackingCode' => '托',
                'paymentDetailUser' => '支付方式',
                'paymentDetailsTitle' => '金额',
                'paymentMethodAdminAdd' => '管理员增加',
                'paymentMethodAdminDeduct' => '管理员扣除余额',
                'paymentMethodAqayePardakht' => 'Aghaye Pardakht',
                'paymentMethodCardToCard' => '卡对卡',
                'paymentMethodCryptoOffline' => '离线加密货币',
                'paymentMethodRialGateway1' => '里亚尔网关 1',
                'paymentMethodRialGateway2' => '里亚尔网关 2',
                'paymentMethodRialGateway3' => '里亚尔网关 3',
                'paymentMethodTelegramStar' => 'Telegram Stars',
                'paymentMethodZarinpal' => 'ZarinPal',
                'paymentSearchBtn' => '总数',
                'paymentSearchTransactionPlaceholder' => '用户 ID 或交易编号...',
                'paymentStatusExpired' => '已过期',
                'paymentStatusPaid' => '已付款',
                'paymentStatusRejected' => '已拒绝',
                'paymentStatusUnpaid' => '未付款',
                'paymentStatusWaiting' => '等待中',
                'paymentTransactionsHeading' => '成功交易总额',
                'paymentTransactionsSubtitle' => '面板所有财务交易的报告。',
                'paymentTransactionsTitle' => '交易',
                'productAddProductBtn' => '添加产品',
                'productAddProductTitle' => '面板',
                'productAddedPrefix' => '产品«',
                'productAddedSuffix' => '»已添加。',
                'productCancelBtn' => '时长（天）',
                'productCloseBtn' => '高级代理',
                'productColActions' => '价格',
                'productColCategory' => '高级代理',
                'productColCreatedAt' => '取消',
                'productColDescription' => '说明',
                'productColId' => '代理',
                'productColLocation' => '代理',
                'productColName' => '您尚未登记任何产品',
                'productColNote' => '保存产品',
                'productColPrice' => '产品名称',
                'productColTime' => '产品列表',
                'productColType' => '普通用户',
                'productColVolume' => '添加
        第一个产品',
                'productConfirmDeleteProduct' => '删除产品«<?= htmlspecialchars(%s) ?>»？',
                'productDayUnit' => '保存更改',
                'productDbError' => '数据库错误：',
                'productDeleteBtn' => '删除',
                'productDeleted' => '产品已删除。',
                'productDescriptionOptional' => '可选说明',
                'productDetailCategory' => '代理',
                'productDetailDescription' => '普通用户',
                'productDetailLocation' => '— 未选择 —',
                'productDetailName' => '产品名称 *',
                'productDetailNote' => '代理',
                'productDetailPrice' => '分类',
                'productDetailTime' => '时长（天）',
                'productDetailTitle' => '编辑产品',
                'productDetailType' => '面板',
                'productDetailVolume' => '价格（托曼）',
                'productEditBtn' => '编辑',
                'productEditProductTitle' => '分类',
                'productEdited' => '产品已编辑。',
                'productErrorPrefix' => '错误：',
                'productFieldCategory' => '面板',
                'productFieldDescription' => '产品名称 *',
                'productFieldLocation' => '分类',
                'productFieldNote' => '— 未选择 —',
                'productFieldPriceToman' => '天',
                'productFieldProductName' => '代码',
                'productFieldProductType' => '添加新产品',
                'productFieldServiceDays' => '托',
                'productFieldVolumeGb' => '操作',
                'productFiftyValue' => '۵۰',
                'productNameExample' => '例如：50 GB 一个月',
                'productNameExists' => '已存在同名产品。',
                'productNameRequired' => '产品名称为必填项。',
                'productNoProductFound' => '流量',
                'productNoProductYet' => '时长',
                'productSaveBtn' => '价格（托曼）',
                'productSearchPlaceholder' => '搜索...',
                'productThirtyValue' => '۳۰',
                'productTomanUnit' => '取消',
                'productTypeExample' => 'VPN、套餐、...',
                'productUnlimitedLabel' => '说明',
                'productVolumeGbSuffix' => '流量 (GB)',
                'productZeroValue' => '۰',
                'productsHeading' => '已登记产品',
                'productsSubtitle' => '可销售产品及其管理的列表。',
                'productsTitle' => '产品',
                'serviceChangeLocationLabel' => '更改位置',
                'serviceCloseBtn' => '从',
                'serviceColAmount' => '用户名',
                'serviceColDate' => '搜索',
                'serviceColPanel' => '清除',
                'serviceColProduct' => '用户',
                'serviceColService' => '等待中',
                'serviceColStatus' => '已拒绝',
                'serviceColType' => '已完成',
                'serviceColUser' => '所有状态',
                'serviceDetailDate' => '托',
                'serviceDetailPanel' => '记录 · 页',
                'serviceDetailService' => '日期',
                'serviceDetailStatus' => '状态',
                'serviceDetailTitle' => '类型',
                'serviceDetailType' => '价格',
                'serviceDetailUser' => '数量',
                'serviceExtraTimeLabel' => '增加时间',
                'serviceExtraVolumeLabel' => '增加流量',
                'serviceNoManualServiceYet' => '尚未登记手动服务',
                'serviceNoServiceFound' => '未找到服务',
                'serviceRenewLabel' => '续费 ',
                'serviceRenewLabel2' => '续费 ',
                'serviceSearchServicePlaceholder' => '用户 ID、用户名、类型...',
                'serviceStatusDone' => '已完成',
                'serviceStatusRejected' => '已拒绝',
                'serviceStatusWaiting' => '等待中',
                'serviceTransferOrderLabel' => '将订单转移给其他用户',
                'servicesHeading' => '服务',
                'servicesPageHeading' => '服务',
                'servicesSubtitle' => '手动服务和服务交易。',
                'servicesSubtitle2' => '用户的手动服务交易。',
                'servicesTitle' => '服务',
                'settingsAboutPanelLabel' => '环境信息',
                'settingsAppearanceSection' => '即时更改 · 保存在浏览器中',
                'settingsApplyThemeBtn' => '登录时间',
                'settingsChangePasswordBtn' => '更改密码',
                'settingsConfirmPasswordLabel' => '折叠',
                'settingsConfirmPasswordPlaceholder' => '重复新密码',
                'settingsCurrentAdmin' => '当前管理员',
                'settingsCurrentPasswordLabel' => '侧边栏视图',
                'settingsCurrentPasswordPlaceholder' => '新密码',
                'settingsCurrentPasswordWrong' => '当前密码错误。',
                'settingsHeading' => '面板配色方案',
                'settingsLogoutBtn' => '当前会话',
                'settingsNewPasswordLabel' => '展开',
                'settingsNewPasswordMismatch' => '新密码确认不匹配。',
                'settingsNewPasswordPlaceholder' => '至少 6 个字符',
                'settingsPanelVersion' => '面板版本',
                'settingsPasswordChanged' => '密码已更改。',
                'settingsPasswordMinLength' => '密码必须至少 6 个字符。',
                'settingsPasswordStrengthLabel' => '更改密码',
                'settingsPhpMemory' => 'PHP 内存',
                'settingsSaveBtn' => '当前密码',
                'settingsSecuritySection' => '开启',
                'settingsServerTime' => '服务器时间',
                'settingsSidebarToggleLabel' => 'IP',
                'settingsSystemInfoTitle' => '退出',
                'settingsSystemSection' => '登录面板',
                'settingsTabAppearance' => '外观',
                'settingsTabSecurity' => '安全',
                'settingsTabSystem' => '系统',
                'settingsThemeBlack' => '黑色',
                'settingsThemeBlackDesc' => '无色 · 极简',
                'settingsThemeBlueSea' => '蓝海',
                'settingsThemeBlueSeaDesc' => '默认 · 青绿色',
                'settingsThemeCreamPaper' => '奶油纸',
                'settingsThemeCreamPaperDesc' => '温暖 · 编辑风',
                'settingsThemeDreamPurple' => '梦幻紫',
                'settingsThemeDreamPurpleDesc' => '深色 · 现代',
                'settingsThemeEmeraldGreen' => '祖母绿',
                'settingsThemeEmeraldGreenDesc' => '自然 · 宁静',
                'settingsThemeLabel' => '深色',
                'settingsThemeLavender' => '薰衣草',
                'settingsThemeLavenderDesc' => '柔和 · 舒缓',
                'settingsThemeLightWhite' => '亮白',
                'settingsThemeLightWhiteDesc' => '明亮 · 专业',
                'settingsThemeMintGreen' => '薄荷绿',
                'settingsThemeMintGreenDesc' => '清新 · 自然',
                'settingsThemePreviewLabel' => '管理员',
                'settingsThemeWarmSunset' => '温暖日落',
                'settingsThemeWarmSunsetDesc' => '温暖 · 活力',
                'settingsTitle' => '设置',
                'settingsWebServer' => 'Web 服务器',
                'userActionInvalidOperation' => '操作无效。',
                'userActionInvalidUserId' => '用户 ID 无效。',
                'userActionUserAlreadyBlocked' => '该用户已被封禁。',
                'userActionUserBlockedSuccess' => '用户 %s 已被封禁。',
                'userActionUserIsActive' => '该用户处于活跃状态。',
                'userActionUserNotFound' => '未找到用户。',
                'userActionUserUnblockedSuccess' => '用户 %s 已解封。',
                'userAddBalanceBtn' => '自定义名称',
                'userAddBalanceTitle' => 'Telegram ID',
                'userAffiliateCountLabel' => '未登记交易',
                'userAmountPlaceholder' => '例如 50000',
                'userBackToUsersBtn' => '电报',
                'userBalanceAddedSuffix' => ' 托曼已添加到余额。',
                'userBalanceLabel' => '总购买额',
                'userBlockUserBtn' => '托',
                'userCancelBtn' => '余额增加',
                'userChangeGroupBtn' => '余额',
                'userChangeGroupTitle' => '编号',
                'userCloseBtn' => '价格',
                'userColAmount' => '余额增加',
                'userColCreatedAt' => '金额',
                'userColDate' => '解封',
                'userColId' => '未登记订单',
                'userColMethod' => '更改用户组',
                'userColName' => '托',
                'userColPanel' => '消息数量',
                'userColPrice' => '交易',
                'userColProduct' => '订单',
                'userColService' => '人',
                'userColStatus' => '积分',
                'userColTime' => '邀请码',
                'userColTrackingCode' => '全部 ←',
                'userColVolume' => '账户到期',
                'userConfirmBlockUser' => '封禁该用户？',
                'userConfirmUnblockUser' => '解封该用户？',
                'userCustomNameLabel' => '付款率',
                'userDetailAmount' => '当前余额：',
                'userDetailDate' => '取消',
                'userDetailDescription' => '取消',
                'userDetailMethod' => '托曼',
                'userDetailPanel' => '当前组：',
                'userDetailProduct' => '更改用户组',
                'userDetailService' => '组',
                'userDetailStatus' => '添加',
                'userDetailTitle' => '产品',
                'userDetailTrackingCode' => '保存',
                'userDetailUser' => '金额（托曼）',
                'userEditNoteBtn' => '名称',
                'userFirstNameLabel' => '钱包',
                'userGroupChangedPrefix' => '用户组已更改为«',
                'userGroupChangedSuffix' => '»。',
                'userGroupLabel' => '订单',
                'userIdLabel' => '余额',
                'userJoinDateLabel' => '已过期',
                'userMessagePlaceholder' => '注册',
                'userMethodAdminAdd' => '管理员增加',
                'userMethodAdminDeduct' => '管理员扣除',
                'userMethodAqayePardakht' => 'Aghaye Pardakht',
                'userMethodCardToCard' => '卡→卡',
                'userMethodCrypto' => '加密货币',
                'userMethodRial1' => '里亚尔 1',
                'userMethodRial2' => '里亚尔 2',
                'userMethodRial3' => '里亚尔 3',
                'userMethodTelegramStar' => 'Telegram Stars',
                'userMethodZarinpal' => 'ZarinPal',
                'userMinAmountToman' => '最低金额为 1,000 托曼。',
                'userNoName' => '无名称',
                'userNoOrderForUser' => '下线',
                'userNoServiceForUser' => '操作',
                'userNoTransactionForUser' => '封禁',
                'userNotFound' => '未找到用户。',
                'userNoteLabel' => '标识',
                'userNotifAllSent' => '已向所有人发送通知',
                'userNumberPrefix' => '用户 #',
                'userOrdersTabLabel' => '下线',
                'userPhoneLabel' => '成功，共',
                'userProfileHeading' => '用户列表',
                'userReferrerLabel' => '托',
                'userRoleAdvancedAgent' => '状态',
                'userRoleAdvancedAgent2' => '高级代理 (n2)',
                'userRoleAgent' => '日期',
                'userRoleFreeUser' => '普通用户 (f)',
                'userRoleNormalAgent' => '代理 (n)',
                'userRoleNormalUser' => '流量',
                'userSendBtn' => '托',
                'userSendMessageBtn' => '余额',
                'userSendMessageTitle' => '组',
                'userServicesTabLabel' => '注册',
                'userStatusActive' => '活跃',
                'userStatusActive2' => '活跃',
                'userStatusBlocked' => '已封禁',
                'userStatusExpired' => '已过期',
                'userStatusFailed' => '失败',
                'userStatusLabel' => '活跃服务',
                'userStatusNearTimeEnd' => '接近时间结束',
                'userStatusNearVolumeEnd' => '接近流量结束',
                'userStatusRejected' => '拒绝',
                'userStatusSuccess' => '成功',
                'userStatusUnpaid' => '未付款',
                'userStatusWaiting' => '等待中',
                'userStatusWaiting2' => '等待中',
                'userStatusWaiting3' => '等待中',
                'userTotalPurchaseLabel' => '日期',
                'userTotalServicesLabel' => '状态',
                'userTransactionsTabLabel' => '推荐人',
                'userUnblockUserBtn' => '用户组',
                'userUnitMillionToman' => '<small>M 托</small>',
                'userUnitToman' => '<small>托</small>',
                'userWalletLabel' => '方式',
                'usernameLabel' => '托',
                'usersAllGroups' => '搜索',
                'usersAllStatuses' => '清除',
                'usersBlockBtn' => '封禁',
                'usersClearBtn' => '用户名',
                'usersColActions' => '所有组',
                'usersColAffiliateCount' => '从',
                'usersColBalance' => '所有状态',
                'usersColCustomName' => '高级代理',
                'usersColGroup' => '活跃',
                'usersColId' => '已封禁',
                'usersColJoinDate' => '普通用户',
                'usersColName' => '代理',
                'usersColPhone' => '代理',
                'usersColReferrer' => '用户 · 页',
                'usersColStatus' => '已封禁',
                'usersColUsername' => '高级代理',
                'usersConfirmBlockUser' => '封禁用户 <?= htmlspecialchars(%s ?: %s) ?>？',
                'usersConfirmUnblockUser' => '解封用户 <?= htmlspecialchars(%s ?: %s) ?>？',
                'usersGroupAdvancedAgent' => '余额',
                'usersGroupFreeUser' => '自定义名称',
                'usersGroupNormalAgent' => '编号',
                'usersHeading' => '用户',
                'usersNoResultFound' => '未找到结果',
                'usersNoUserYet' => '尚未登记用户',
                'usersPaginationNext' => '托',
                'usersPaginationPrev' => '组',
                'usersSearchBtn' => '标识',
                'usersSearchUserPlaceholder' => 'ID、用户名、自定义名称、编号...',
                'usersStatusActiveFilter' => '积分',
                'usersStatusBlockedFilter' => '注册',
                'usersSubtitle' => '机器人用户列表。',
                'usersTitle' => '用户',
                'usersTotalCountLabel' => '已封禁',
                'usersUnblockBtn' => '解封',
                'usersViewBtn' => '查看',
        ],
        'paymentGateway' => [
                'zarinpalErrors' => [
                        -9 => '发送数据出错',
                        -10 => '受理方的 IP 或商户代码不正确。',
                        -11 => '商户代码未激活，',
                        -12 => '短时间内尝试次数过多',
                        -15 => '支付网关已被暂停',
                        -16 => '受理方的验证级别低于银级。',
                        -17 => '受理方处于蓝级限制',
                        -30 => '受理方无权访问浮动共享结算服务。',
                        -31 => '请将结算银行账户添加到面板。为分账输入的值不正确。受理方要使用浮动共享结算服务，必须向其用户面板添加有效的银行账户。',
                        -32 => '输入的金额大于交易总额。',
                        -33 => '输入的百分比不正确。',
                        -34 => '输入的金额大于交易总额。',
                        -35 => '分账收款人数量超过允许限制。',
                        -36 => '分账最低金额必须为 10000 里亚尔',
                        -37 => '为分账输入的一个或多个 Sheba 号码在银行端处于未激活状态。',
                        -38 => '错误：Sheba 定义不正确。请几分钟后重试。',
                        -39 => '	发生了错误',
                        -40 => '',
                        -50 => '已付金额与 verify 方法中发送的金额不同。',
                        -51 => '付款失败',
                        -52 => '	发生了意外错误。',
                        -53 => '该付款不属于此商户代码。',
                        -54 => 'authority 无效。',
                ],
                'zarinpalResultCodes' => [
                        0 => '付款未完成',
                        2 => '交易已经过验证并付款',
                ],
                'statusSuccess' => '付款成功',
                'statusFailed' => '失败',
                'descThanks' => '感谢您完成交易！',
                'giftReport' => '🎁 尊敬的用户，%s 托曼已作为礼物存入您的账户。',
                'lowAmount' => '❌ 用户存入的金额少于指定金额。',
                'reportZarinpal' => '💵 新付款
        
用户数字 ID：%s
用户用户名：%s
交易金额 %s
付款交易编号：%s
用户卡号：%s
支付方式：ZarinPal 网关',
                'reportAqayepardakht' => '💵 新付款
        
用户数字 ID：%s
用户用户名：%s
交易金额 %s
支付方式：Aghaye Pardakht 网关',
                'reportIranpay' => '💵 新付款
        
用户数字 ID：%s
用户用户名：%s
交易金额 %s
支付方式：第一里亚尔货币',
                'reportCard' => '机器人批准了一张收据

信息：
💰 付款金额：%s
👤  用户数字 ID：%s 
👤 用户用户名：@%s 
用户余额：%s 托曼
付款跟踪码：%s',
                'reportTronado' => '💵 新付款
%s
- 👤 用户用户名：@%s
- 🆔用户数字 ID：%s
- 💸 交易金额 %s
- 🔗 <a href = "https://tronscan.org/#/transaction/%s">付款链接 </a>
- 📥 已存入的 Tron 金额：%s
- 💳 支付方式：Tronado',
                'reportNowpayment' => '💵 新付款
- 👤 用户用户名：@%s
- 🆔用户数字 ID：%s
- 💸 交易金额 %s
- 📥 已存入的 Tron 金额：%s
- 💳 支付方式：nowpayment',
                'invoiceTitle' => '付款发票',
                'invoiceTransactionNo' => '交易编号：',
                'invoiceAmount' => '支付金额：',
                'invoiceAmountUnit' => '托曼',
                'invoiceDate' => '日期：',
        ],
];