<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Các Thành Phần';
$lang['admin_content'] = 'Nội dung';
$lang['admin_database_backup'] = 'Sao Lưu Cơ Sở Dữ Liệu';
$lang['admin_extensions'] = 'Phần mở rộng';
$lang['admin_firewall'] = 'Tường lửa';
$lang['admin_help'] = 'Trợ giúp';
$lang['admin_languages'] = 'Ngôn ngữ';
$lang['admin_logs'] = 'Nhật ký hệ thống';
$lang['admin_media'] = 'Thư viện phương tiện';
$lang['admin_modules'] = 'Các mô-đun';
$lang['admin_plugins'] = 'Plugin';
$lang['admin_reports'] = 'Nhật ký hoạt động';
$lang['admin_settings'] = 'Cài đặt hệ thống';
$lang['admin_sysinfo'] = 'Thông tin hệ thống';
$lang['admin_system'] = 'Hệ thống';
$lang['admin_system_firewall'] = 'Tường lửa hệ thống';
$lang['admin_themes'] = 'Chủ đề';
$lang['admin_updates'] = 'Cập nhật hệ thống';
$lang['admin_users'] = 'Người dùng';
$lang['admin_view_site'] = 'Xem trang web';
$lang['per_page'] = 'Mỗi trang';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Cảm ơn bạn đã tạo với <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Không có mục nào đang hoạt động.} other{<b>#</b> trong tổng số <b>%s</b> mục đang hoạt động.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Cài đặt';
$lang['admin_install_error'] = 'Không thể cài đặt gói.';
$lang['admin_install_error_com'] = 'Cài đặt thất bại: %s';
$lang['admin_install_location_app'] = 'Chỉ ứng dụng này';
$lang['admin_install_location_core'] = 'Tất cả ứng dụng';
$lang['admin_install_location_select'] = '&#151; Chọn vị trí &#151;';
$lang['admin_install_success'] = 'Gói đã được cài đặt thành công.';
$lang['admin_install_upload'] = 'Tải lên';
$lang['admin_install_upload_error'] = 'Không thể tải gói lên.';
$lang['admin_install_upload_success'] = 'Gói đã được tải lên thành công.';
$lang['admin_install_upload_tip'] = 'Cài đặt gói bằng cách tải tệp <b>.zip</b> của gói lên tại đây.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Không thể xóa tệp sao lưu cũ.';
$lang['admin_database_backup_clean_success'] = 'Đã xóa %d tệp sao lưu. Đã giải phóng %d dung lượng đĩa.';
$lang['admin_database_backup_create'] = 'Tạo Sao Lưu';
$lang['admin_database_backup_create_confirm'] = 'Bạn có chắc chắn muốn tạo bản sao lưu ngay bây giờ?';
$lang['admin_database_backup_create_error'] = 'Không thể tạo tệp sao lưu. Đảm bảo thư mục <b>%s</b> có quyền ghi.';
$lang['admin_database_backup_create_success'] = 'Tệp sao lưu cơ sở dữ liệu <b>%s</b> đã được tạo thành công.';
$lang['admin_database_backup_delete_confirm'] = 'Bạn có chắc chắn muốn xóa các tệp sao lưu này?';
$lang['admin_database_backup_delete_error'] = 'Không thể xóa các tệp sao lưu đã chọn.';
$lang['admin_database_backup_delete_success'] = 'Các tệp sao lưu đã được xóa thành công.';
$lang['admin_database_backup_download_error'] = 'Không thể tải xuống tệp sao lưu đã chọn.';
$lang['admin_database_backup_download_success'] = 'Tệp sao lưu đã được tải xuống thành công.';
$lang['admin_database_backup_lock_confirm'] = 'Bạn có chắc chắn muốn khóa các tệp sao lưu này?';
$lang['admin_database_backup_lock_error'] = 'Không thể khóa các tệp sao lưu đã chọn.';
$lang['admin_database_backup_lock_success'] = 'Các tệp sao lưu đã được khóa thành công.';
$lang['admin_database_backup_locked_error'] = 'Không thể xóa các tệp sao lưu đã khóa.';
$lang['admin_database_backup_missing_error'] = 'Không tìm thấy tệp sao lưu.';
$lang['admin_database_backup_unlock_confirm'] = 'Bạn có chắc chắn muốn mở khóa các tệp sao lưu này không?';
$lang['admin_database_backup_unlock_error'] = 'Không thể mở khóa các tệp sao lưu đã chọn.';
$lang['admin_database_backup_unlock_success'] = 'Các tệp sao lưu đã được mở khóa thành công.';
$lang['admin_database_prune'] = 'Cắt tỉa';
$lang['admin_database_prune_confirm'] = 'Bạn có chắc chắn muốn dọn dẹp cơ sở dữ liệu? Một bản sao lưu sẽ được tạo trước khi thực hiện.';
$lang['admin_database_prune_error'] = 'Không thể xóa dữ liệu trong cơ sở dữ liệu.';
$lang['admin_database_prune_next'] = 'Lần dọn dẹp tiếp theo: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Cơ sở dữ liệu đã được dọn dẹp thành công.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Xóa Nhật Ký';
$lang['admin_logs_delete_confirm'] = 'Bạn có chắc chắn muốn xóa các tệp nhật ký đã chọn?';
$lang['admin_logs_delete_error'] = 'Không thể xóa các tệp nhật ký.';
$lang['admin_logs_delete_success'] = 'Tệp nhật ký đã được xóa thành công.';
$lang['admin_logs_error_disabled'] = 'Ghi nhật ký hiện không được kích hoạt.';
$lang['admin_logs_error_empty'] = 'Không tìm thấy nhật ký nào.';
$lang['admin_logs_error_missing'] = 'Không thể tìm thấy tệp nhật ký hoặc tệp rỗng.';
$lang['admin_logs_tip'] = 'Nhật ký có thể tạo ra các tệp rất lớn. Với các trang đang hoạt động, hãy cân nhắc xóa những tệp cũ.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Bạn có chắc muốn xóa các email đã chọn không?';
$lang['admin_emails_delete_error'] = 'Không thể xóa các email đã chọn.';
$lang['admin_emails_delete_success'] = 'Các email đã chọn đã được xóa thành công.';
$lang['admin_emails_email_from'] = 'Gửi từ';
$lang['admin_emails_mail_queue'] = 'Hàng đợi email';
$lang['admin_emails_mailer'] = 'Thư hàng loạt';
$lang['admin_emails_search'] = 'Tìm kiếm email theo chủ đề hoặc nội dung...';
$lang['admin_emails_send_error'] = 'Không thể đưa email vào hàng đợi. Vui lòng thử lại.';
$lang['admin_emails_send_none'] = 'Không có người dùng nào phù hợp với tiêu chí đã chọn.';
$lang['admin_emails_send_success'] = 'Email đã được đưa vào hàng đợi và sẽ được gửi sớm.';
$lang['admin_emails_send_to_banned'] = 'Gửi tới người dùng bị cấm.';
$lang['admin_emails_send_to_deleted'] = 'Gửi tới người dùng bị xóa.';
$lang['admin_emails_send_to_disabled'] = 'Gửi tới người dùng không hoạt động.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Thêm Người Dùng';
$lang['admin_users_all_users'] = 'Tất Cả Người Dùng';
$lang['admin_users_ban_confirm'] = 'Bạn có chắc chắn muốn cấm người dùng đã chọn không?';
$lang['admin_users_ban_error'] = 'Không thể cấm người dùng đã chọn.';
$lang['admin_users_ban_success'] = 'Đã cấm thành công người dùng đã chọn.';
$lang['admin_users_delete_confirm'] = 'Bạn có chắc chắn muốn xóa người dùng đã chọn không?';
$lang['admin_users_delete_error'] = 'Không thể xóa người dùng đã chọn.';
$lang['admin_users_delete_success'] = 'Đã xóa thành công người dùng đã chọn.';
$lang['admin_users_disable_confirm'] = 'Bạn có chắc chắn muốn vô hiệu hóa người dùng đã chọn không?';
$lang['admin_users_disable_error'] = 'Không thể vô hiệu hóa người dùng đã chọn.';
$lang['admin_users_disable_success'] = 'Đã vô hiệu hóa thành công người dùng đã chọn.';
$lang['admin_users_edit'] = 'Chỉnh Sửa Người Dùng';
$lang['admin_users_edit_error'] = 'Không thể cập nhật người dùng.';
$lang['admin_users_edit_success'] = 'Người dùng đã được cập nhật thành công.';
$lang['admin_users_enable_confirm'] = 'Bạn có chắc chắn muốn kích hoạt người dùng đã chọn không?';
$lang['admin_users_enable_error'] = 'Không thể kích hoạt người dùng đã chọn.';
$lang['admin_users_enable_success'] = 'Đã kích hoạt thành công người dùng đã chọn.';
$lang['admin_users_groups'] = 'Nhóm';
$lang['admin_users_lock_confirm'] = 'Bạn có chắc chắn muốn khóa những người dùng đã chọn không?';
$lang['admin_users_lock_error'] = 'Không thể khóa những người dùng đã chọn.';
$lang['admin_users_lock_success'] = 'Những người dùng đã chọn đã được khóa thành công.';
$lang['admin_users_logged'] = 'Người dùng đã đăng nhập';
$lang['admin_users_manage'] = 'Quản lý người dùng';
$lang['admin_users_remove_confirm'] = 'Bạn có chắc chắn muốn xóa vĩnh viễn người dùng đã chọn và tất cả dữ liệu của họ không?';
$lang['admin_users_remove_error'] = 'Không thể xóa vĩnh viễn người dùng đã chọn và tất cả dữ liệu của họ.';
$lang['admin_users_remove_success'] = 'Đã xóa thành công người dùng đã chọn và tất cả dữ liệu của họ.';
$lang['admin_users_restore_confirm'] = 'Bạn có chắc chắn muốn khôi phục người dùng đã chọn không?';
$lang['admin_users_restore_error'] = 'Không thể khôi phục người dùng đã chọn.';
$lang['admin_users_restore_success'] = 'Đã khôi phục thành công người dùng đã chọn.';
$lang['admin_users_search'] = 'Tìm theo tên hoặc email...';
$lang['admin_users_unban_confirm'] = 'Bạn có chắc chắn muốn bỏ cấm người dùng đã chọn không?';
$lang['admin_users_unban_error'] = 'Không thể bỏ cấm người dùng đã chọn.';
$lang['admin_users_unban_success'] = 'Đã bỏ cấm thành công người dùng đã chọn.';
$lang['admin_users_unlock_confirm'] = 'Bạn có chắc chắn muốn mở khóa những người dùng đã chọn không?';
$lang['admin_users_unlock_error'] = 'Không thể mở khóa những người dùng đã chọn.';
$lang['admin_users_unlock_success'] = 'Đã mở khóa thành công những người dùng đã chọn.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Xóa Nhật ký';
$lang['admin_reports_clear_confirm'] = 'Bạn có chắc chắn muốn xóa nhật ký hành động không?';
$lang['admin_reports_clear_error'] = 'Không thể xóa nhật ký hành động.';
$lang['admin_reports_clear_success'] = 'Nhật ký hành động đã được xóa thành công.';
$lang['admin_reports_latest_actions'] = 'Hoạt động gần đây';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Bạn có chắc chắn muốn xóa các tệp đã chọn?';
$lang['admin_media_delete_error'] = 'Không thể xóa các tệp.';
$lang['admin_media_delete_success'] = 'Các tệp đã được xóa thành công.';
$lang['admin_media_file_delete_error'] = 'Không thể xóa tệp.';
$lang['admin_media_file_delete_success'] = 'Tệp đã được xóa thành công.';
$lang['admin_media_file_update_error'] = 'Không thể cập nhật tệp.';
$lang['admin_media_file_update_success'] = 'Tệp đã được cập nhật thành công.';
$lang['admin_media_search'] = 'Tìm kiếm theo tên, mô tả hoặc tên tệp...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Không có mô-đun nào đang hoạt động.} other{<b>#</b> trong tổng số <b>%s</b> mô-đun đang hoạt động.}';
$lang['admin_modules_add'] = 'Thêm Mô-đun';
$lang['admin_modules_delete_confirm'] = 'Bạn có chắc chắn muốn xóa mô-đun: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Không thể xóa mô-đun.';
$lang['admin_modules_delete_success'] = 'Module đã được xóa thành công.';
$lang['admin_modules_disable_all_confirm'] = 'Bạn có chắc chắn muốn vô hiệu hóa tất cả các mô-đun không?';
$lang['admin_modules_disable_all_error'] = 'Không thể vô hiệu hóa tất cả các mô-đun.';
$lang['admin_modules_disable_all_success'] = 'Tất cả các mô-đun đã được vô hiệu hóa thành công.';
$lang['admin_modules_disable_confirm'] = 'Bạn có chắc chắn muốn vô hiệu hóa mô-đun: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Không thể vô hiệu hóa mô-đun.';
$lang['admin_modules_disable_success'] = 'Module đã được vô hiệu hóa thành công.';
$lang['admin_modules_enable_all_confirm'] = 'Bạn có chắc chắn muốn kích hoạt tất cả các mô-đun không?';
$lang['admin_modules_enable_all_error'] = 'Không thể kích hoạt tất cả các mô-đun.';
$lang['admin_modules_enable_all_success'] = 'Tất cả các mô-đun đã được kích hoạt thành công.';
$lang['admin_modules_enable_confirm'] = 'Bạn có chắc chắn muốn kích hoạt mô-đun: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Không thể kích hoạt mô-đun.';
$lang['admin_modules_enable_success'] = 'Module đã được kích hoạt thành công.';
$lang['admin_modules_install_tip'] = 'Các mô-đun thêm tính năng mới cho trang web của bạn. Duyệt các mô-đun có sẵn trong <a href="%s" target="_blank" rel="noopener">thư mục mô-đun</a> hoặc tải lên tệp <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Không có plugin nào đang hoạt động.} other{<b>#</b> trong tổng số <b>%s</b> plugin đang hoạt động.}';
$lang['admin_plugins_add'] = 'Thêm Plugin';
$lang['admin_plugins_delete_confirm'] = 'Bạn có chắc chắn muốn xóa plugin: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Không thể xóa plugin.';
$lang['admin_plugins_delete_success'] = 'Xóa plugin thành công.';
$lang['admin_plugins_disable_all_confirm'] = 'Bạn có chắc chắn muốn vô hiệu hóa tất cả các plugin không?';
$lang['admin_plugins_disable_all_error'] = 'Không thể vô hiệu hóa tất cả các plugin.';
$lang['admin_plugins_disable_all_success'] = 'Tất cả các plugin đã được vô hiệu hóa thành công.';
$lang['admin_plugins_disable_confirm'] = 'Bạn có chắc chắn muốn vô hiệu hóa plugin: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Không thể vô hiệu hóa plugin.';
$lang['admin_plugins_disable_success'] = 'Vô hiệu hóa plugin thành công.';
$lang['admin_plugins_enable_all_confirm'] = 'Bạn có chắc chắn muốn kích hoạt tất cả các plugin không?';
$lang['admin_plugins_enable_all_error'] = 'Không thể kích hoạt tất cả các plugin.';
$lang['admin_plugins_enable_all_success'] = 'Tất cả các plugin đã được kích hoạt thành công.';
$lang['admin_plugins_enable_confirm'] = 'Bạn có chắc chắn muốn kích hoạt plugin: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Không thể kích hoạt plugin.';
$lang['admin_plugins_enable_success'] = 'Kích hoạt plugin thành công.';
$lang['admin_plugins_install_tip'] = 'Plugin mở rộng các tính năng hiện có với tùy chọn hoặc tích hợp bổ sung. Cài đặt từ <a href="%s" target="_blank" rel="noopener">thư mục plugin</a> hoặc tải lên tệp <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Thêm Giao Diện';
$lang['admin_themes_delete_confirm'] = 'Bạn có chắc chắn muốn xóa giao diện: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Không thể xóa chủ đề.';
$lang['admin_themes_delete_error_active'] = 'Bạn không thể xóa chủ đề hiện đang hoạt động.';
$lang['admin_themes_delete_success'] = 'Chủ đề đã được xóa thành công.';
$lang['admin_themes_disable_confirm'] = 'Bạn có chắc chắn muốn vô hiệu hóa giao diện: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Không thể vô hiệu hóa giao diện.';
$lang['admin_themes_disable_success'] = 'Giao diện đã được vô hiệu hóa thành công.';
$lang['admin_themes_enable_confirm'] = 'Bạn có chắc chắn muốn kích hoạt giao diện: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Không thể kích hoạt giao diện.';
$lang['admin_themes_enable_success'] = 'Giao diện đã được kích hoạt thành công.';
$lang['admin_themes_install_tip'] = 'Giao diện thay đổi diện mạo và bố cục trang web của bạn. Chọn từ <a href="%s" target="_blank" rel="noopener">thư viện giao diện</a> hoặc tải lên tệp <b>.zip</b> để cài đặt.';
$lang['admin_themes_none_tip'] = 'Ứng dụng này đang chạy mà không có giao diện. Hãy cài đặt một giao diện để tùy chỉnh giao diện công khai.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menu';
$lang['admin_menus_assign_error'] = 'Không thể cập nhật vị trí menu.';
$lang['admin_menus_assign_success'] = 'Vị trí menu đã được cập nhật thành công.';
$lang['admin_menus_header'] = 'Có <b>%s</b> vị trí menu khả dụng.';
$lang['admin_menus_location'] = 'Vị trí';
$lang['admin_menus_locations'] = 'Vị trí Menu';
$lang['admin_menus_manage'] = 'Quản lý Menu';
$lang['admin_menus_menu'] = 'Menu được gán';
$lang['admin_menus_none'] = '&#151; Không có &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Thêm ngôn ngữ';
$lang['admin_languages_default_confirm'] = 'Bạn có chắc chắn muốn đặt ngôn ngữ này làm ngôn ngữ mặc định của trang?';
$lang['admin_languages_default_error'] = 'Không thể thay đổi ngôn ngữ mặc định.';
$lang['admin_languages_default_error_nochange'] = 'Ngôn ngữ này đã là ngôn ngữ mặc định.';
$lang['admin_languages_default_success'] = 'Ngôn ngữ mặc định đã được thay đổi thành công.';
$lang['admin_languages_disable_all_confirm'] = 'Bạn có chắc chắn muốn tắt tất cả ngôn ngữ không?';
$lang['admin_languages_disable_all_error'] = 'Không thể tắt tất cả ngôn ngữ.';
$lang['admin_languages_disable_all_success'] = 'Tất cả ngôn ngữ đã được tắt thành công.';
$lang['admin_languages_disable_confirm'] = 'Bạn có chắc chắn muốn vô hiệu hóa ngôn ngữ: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Không thể vô hiệu hóa ngôn ngữ.';
$lang['admin_languages_disable_error_default'] = 'Không thể tắt ngôn ngữ mặc định.';
$lang['admin_languages_disable_error_nochange'] = 'Ngôn ngữ này đã bị vô hiệu hóa.';
$lang['admin_languages_disable_success'] = 'Ngôn ngữ đã được tắt thành công.';
$lang['admin_languages_enable_all_confirm'] = 'Bạn có chắc chắn muốn bật tất cả ngôn ngữ không?';
$lang['admin_languages_enable_all_error'] = 'Không thể bật tất cả ngôn ngữ.';
$lang['admin_languages_enable_all_success'] = 'Tất cả ngôn ngữ đã được bật thành công.';
$lang['admin_languages_enable_confirm'] = 'Bạn có chắc chắn muốn kích hoạt ngôn ngữ: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Không thể kích hoạt ngôn ngữ.';
$lang['admin_languages_enable_error_nochange'] = 'Ngôn ngữ này đã được kích hoạt.';
$lang['admin_languages_enable_success'] = 'Ngôn ngữ đã được kích hoạt thành công.';
$lang['admin_languages_install_tip'] = 'Ngôn ngữ thêm bản dịch cho giao diện và nội dung của trang web của bạn. Duyệt các ngôn ngữ có sẵn trong <a href="%s" target="_blank" rel="noopener">thư mục ngôn ngữ</a> hoặc tải lên một gói <b>.zip</b> để cài đặt ngôn ngữ của riêng bạn.';
$lang['admin_languages_tip'] = 'Bật, tắt và đặt ngôn ngữ mặc định cho trang web. Các ngôn ngữ đã bật sẽ có sẵn cho khách truy cập.';

/**
 * ---------------------------------------------------------------
 * Updates & License Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Có bản cập nhật mới!';
$lang['update_backup_error'] = 'Không thể tạo bản sao lưu của gói hiện có. Bản cập nhật đã bị hủy.';
$lang['update_check_disabled'] = 'Kiểm tra cập nhật tự động đã bị tắt. Bật chúng để xem các bản cập nhật.';
$lang['update_check_error'] = 'Không thể chạy kiểm tra cập nhật vào lúc này.';
$lang['update_check_success'] = 'Kiểm tra cập nhật đã hoàn tất thành công.';
$lang['update_install_error'] = 'Không thể cài đặt gói. Phiên bản trước đã được giữ lại.';
$lang['update_install_success'] = 'Gói đã được cập nhật thành công lên phiên bản mới nhất.';
$lang['update_interval_3days'] = 'Mỗi 3 ngày';
$lang['update_interval_biweekly'] = 'Mỗi 2 tuần';
$lang['update_interval_daily'] = 'Mỗi ngày';
$lang['update_interval_monthly'] = 'Mỗi tháng một lần';
$lang['update_interval_weekly'] = 'Mỗi tuần một lần';
$lang['update_not_available'] = 'Trang web của bạn đã được cập nhật.';
$lang['update_rollback_error'] = 'Không thể khôi phục phiên bản trước. Có thể cần can thiệp thủ công.';
$lang['update_rollback_success'] = 'Đã khôi phục phiên bản trước thành công.';
$lang['updates_available'] = 'Bản cập nhật có sẵn';
$lang['updates_check_now'] = 'Kiểm tra ngay';
$lang['updates_check_now_confirm'] = 'Bạn có chắc chắn muốn kiểm tra cập nhật ngay bây giờ không?';
$lang['updates_current_version'] = 'Phiên bản hiện tại';
$lang['updates_enable'] = 'Bật cập nhật';
$lang['updates_last_check'] = 'Kiểm tra lần cuối: %s';
$lang['updates_latest_version'] = 'Phiên bản mới nhất';
$lang['updates_next_check'] = 'Kiểm tra theo lịch tiếp theo: %s';
$lang['updates_previous_version'] = 'Phiên bản trước';
$lang['updates_recent'] = 'Vừa cập nhật';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Chặn địa chỉ IP được chỉ định thất bại.';
$lang['admin_firewall_ban_success'] = 'Địa chỉ IP đã được chặn thành công.';
$lang['admin_firewall_block_ip'] = 'Chặn địa chỉ IP';
$lang['admin_firewall_delete_confirm'] = 'Bạn có chắc chắn muốn bỏ chặn các địa chỉ IP đã chọn không?';
$lang['admin_firewall_delete_error'] = 'Không thể bỏ chặn các địa chỉ IP đã chọn.';
$lang['admin_firewall_delete_success'] = 'Các địa chỉ IP đã chọn đã được bỏ chặn thành công.';
$lang['admin_firewall_duration'] = 'Thời gian chặn';
$lang['admin_firewall_permanent'] = 'Vĩnh viễn';
$lang['admin_firewall_reason'] = 'Lý do chặn';
$lang['admin_firewall_tip'] = 'Xem và quản lý các địa chỉ IP bị tường lửa chặn do vi phạm lặp lại hoặc hoạt động đáng ngờ.';

// Settings
$lang['404_ban_duration'] = 'Thời gian chặn 404';
$lang['404_threshold'] = 'Giới hạn lỗi 404';
$lang['uri_ban_duration'] = 'Thời gian chặn URI';
$lang['uri_strike_threshold'] = 'Giới hạn URI';
