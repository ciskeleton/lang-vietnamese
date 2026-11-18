<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Có bản cập nhật hệ thống';
$lang['emails_updates_available_message'] = <<<EOT
Chào bạn,

Các bản cập nhật hệ thống mới đã được phát hiện cho {site_anchor}.

Các bản cập nhật này có thể bao gồm các bản vá bảo mật, cải thiện hiệu suất hoặc tính năng mới.
Chúng tôi khuyến nghị bạn nên xem xét chúng càng sớm càng tốt.

Bạn có thể xem xét và quản lý các bản cập nhật có sẵn từ bảng điều khiển quản trị:
{link}

Nếu bạn đã xem xét hoặc áp dụng các bản cập nhật, không cần thực hiện thêm hành động nào.

Đây là tin nhắn hệ thống tự động được gửi bởi {site_name}.
Vui lòng không trả lời email này.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Kích hoạt tài khoản';
$lang['emails_account_activation_request_message'] = <<<EOT
Xin chào {name},

Cảm ơn bạn đã đăng ký tại {site_anchor}. Tài khoản của bạn đã được tạo và cần được kích hoạt trước khi sử dụng.

Để kích hoạt tài khoản, hãy nhấp vào liên kết sau hoặc sao chép và dán vào trình duyệt của bạn:
{link}

Trân trọng,
-- Đội ngũ {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Liên kết kích hoạt mới';
$lang['emails_account_activation_resend_message'] = <<<EOT
Xin chào {name},

Bạn vừa yêu cầu một liên kết kích hoạt mới trên {site_anchor} vì tài khoản của bạn chưa được kích hoạt.
Để kích hoạt tài khoản, hãy nhấp vào liên kết sau hoặc sao chép và dán vào trình duyệt của bạn:
{link}

Nếu bạn không yêu cầu điều này, bạn không cần thực hiện thêm hành động nào.

Yêu cầu này được thực hiện từ địa chỉ IP: {ip_link}.

Trân trọng,
-- Đội ngũ {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Tài khoản đã được kích hoạt';
$lang['emails_account_activation_success_message'] = <<<EOT
Xin chào {name},

Tài khoản của bạn tại {site_anchor} đã được kích hoạt thành công. Bây giờ bạn có thể <a href="{login_url}" target="_blank" rel="noopener">đăng nhập</a> bất cứ khi nào bạn muốn.

Chúng tôi hy vọng bạn sẽ hài lòng khi sử dụng dịch vụ. Trân trọng kính chào.

-- Đội ngũ {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Tài khoản đang chờ phê duyệt';
$lang['emails_account_approval_pending_message'] = <<<EOT
Xin chào {name},

Cảm ơn bạn đã tham gia cùng chúng tôi tại {site_anchor}. Tài khoản của bạn đã được tạo nhưng cần sự phê duyệt của quản trị viên trước khi được kích hoạt.
Chúng tôi thành thật xin lỗi vì bước quan trọng này, nhưng điều này chỉ nhằm đảm bảo an toàn.

Bạn sẽ nhận được email xác nhận ngay khi tài khoản của bạn được phê duyệt.

Hy vọng bạn sẽ hài lòng khi ở đây, xin vui lòng chấp nhận lời chào trân trọng từ chúng tôi.

-- Đội ngũ {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Tài khoản đã được phê duyệt';
$lang['emails_account_approval_success_message'] = <<<EOT
Xin chào {name},

Tin vui! Tài khoản của bạn tại {site_anchor} đã được phê duyệt.

Bây giờ bạn có thể đăng nhập và sử dụng tài khoản ngay lập tức:
{link}

Chúng tôi rất vui khi có bạn đồng hành.

-- Đội ngũ {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Tài khoản đã được khôi phục';
$lang['emails_account_restored_message'] = <<<EOT
Xin chào {name},

Email này xác nhận rằng tài khoản của bạn tại {site_anchor} đã được khôi phục thành công.

Chào mừng bạn quay lại, và chúng tôi hy vọng lần này bạn sẽ hài lòng khi sử dụng dịch vụ.

Trân trọng kính chào,
-- Đội ngũ {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Chào mừng bạn đến với {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Xin chào {name},

Hầu hết các trang web đều có chuỗi email chào mừng rất dài sau khi bạn đăng ký.

Tin tốt: chúng tôi không giống như hầu hết mọi người.
Tuy nhiên, chúng tôi muốn chào đón bạn và cảm ơn bạn đã tham gia cùng chúng tôi tại {site_anchor}.

Hy vọng bạn sẽ có một trải nghiệm tuyệt vời. Vui lòng chấp nhận lời chào trân trọng từ chúng tôi.

-- Đội ngũ {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Yêu cầu thay đổi email';
$lang['emails_email_change_request_message'] = <<<EOT
Xin chào {name},

Bạn nhận được email này vì chúng tôi đã nhận được yêu cầu thay đổi địa chỉ email cho tài khoản của bạn trên {site_anchor}.

Nhấp vào liên kết sau hoặc sao chép và dán nó vào trình duyệt của bạn nếu bạn muốn tiếp tục:
{link}

Nếu bạn không yêu cầu thay đổi email, bạn không cần thực hiện thêm hành động nào.

Yêu cầu này được gửi từ địa chỉ IP: {ip_link}.

Trân trọng,
-- Đội ngũ {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Địa chỉ email đã được thay đổi';
$lang['emails_email_change_success_message'] = <<<EOT
Xin chào {name},

Email này xác nhận rằng địa chỉ email của bạn được sử dụng trên {site_anchor} đã được thay đổi thành công.

Nếu bạn không thực hiện hành động này, vui lòng liên hệ với chúng tôi càng sớm càng tốt để giải quyết vấn đề.

Hành động này được thực hiện từ địa chỉ IP: {ip_link}.

Trân trọng,
-- Đội ngũ {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Cảnh báo đăng nhập thất bại';
$lang['emails_login_alert_failure_message'] = <<<EOT
Xin chào {name},

Gần đây có ai đó đã sử dụng mật khẩu sai để cố gắng đăng nhập vào tài khoản {site_name} của bạn.

Ngày máy chủ: {date}
Thiết bị: {browser}, {platform}
Địa chỉ IP: {ip_link}

Nếu không phải bạn, đừng lo lắng, nỗ lực đăng nhập không thành công.

Nếu đó là bạn và bạn không nhớ mật khẩu, hãy nhấp vào liên kết bên dưới để đặt lại mật khẩu:
{reset_link}

Nếu bạn gặp khó khăn khi đăng nhập vào tài khoản, hãy liên hệ với đội ngũ của chúng tôi hoặc yêu cầu liên kết đăng nhập một lần nhấn.

-- Đội ngũ {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Thông báo đăng nhập thành công';
$lang['emails_login_alert_success_message'] = <<<EOT
Xin chào {name},

Chúng tôi gửi cho bạn email này sau khi bạn đăng nhập thành công vào tài khoản {site_name}.

Ngày máy chủ: {date}
Thiết bị: {browser}, {platform}
Địa chỉ IP: {ip_link}

Nếu bạn đã thực hiện đăng nhập này, bạn có thể bỏ qua email này.

Nếu không phải bạn, hãy thay đổi mật khẩu ngay lập tức để bảo vệ tài khoản của mình.

Nếu cần hỗ trợ, vui lòng liên hệ với đội ngũ hỗ trợ của chúng tôi.

-- Đội ngũ {site_name}
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Liên kết đăng nhập nhanh';
$lang['emails_login_magic_link_message'] = <<<EOT
Xin chào {name},

Bạn đã yêu cầu đăng nhập bằng một cú nhấp vào tài khoản của mình trên {site_anchor}.

Nhấp vào liên kết bên dưới hoặc sao chép-dán vào trình duyệt của bạn để đăng nhập ngay lập tức:
{link}

Liên kết này sẽ hết hạn sau 15 phút. Nếu bạn không yêu cầu điều này, vui lòng bỏ qua email này.

Yêu cầu này được gửi từ địa chỉ IP: {ip_link}.

Trân trọng,
-- Đội ngũ {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Xác thực hai yếu tố';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Xin chào {name},

Mã xác thực hai yếu tố của bạn là: <strong>{code}</strong>

Bạn luôn có thể tắt xác thực hai yếu tố trong cài đặt tài khoản của mình.

Hành động này được thực hiện từ địa chỉ IP: {ip_link}.

Trân trọng kính chào,
-- Đội ngũ {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Yêu cầu đặt lại mật khẩu';
$lang['emails_password_change_request_message'] = <<<EOT
Xin chào {name},

Bạn nhận được email này vì chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn trên {site_anchor}.

Nhấp vào liên kết sau hoặc sao chép và dán vào trình duyệt của bạn nếu bạn muốn tiếp tục:
{link}

Nếu bạn không yêu cầu đặt lại mật khẩu, không cần thực hiện thêm hành động nào.

Yêu cầu này được gửi từ địa chỉ IP: {ip_link}.

Trân trọng,
-- Đội ngũ {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Mật khẩu đã được thay đổi thành công';
$lang['emails_password_change_success_message'] = <<<EOT
Xin chào {name},

Email này xác nhận rằng mật khẩu của bạn tại {site_anchor} đã được thay đổi thành công. Bạn có thể <a href="{login_url}" target="_blank" rel="noopener">đăng nhập</a> bằng mật khẩu mới.

Nếu bạn không thực hiện hành động này, vui lòng liên hệ với chúng tôi sớm nhất có thể để giải quyết vấn đề.

Hành động này được thực hiện từ địa chỉ IP: {ip_link}.

Trân trọng,
-- Đội ngũ {site_name}.
EOT;
