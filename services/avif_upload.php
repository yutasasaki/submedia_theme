<?php
// AVIFファイルの拡張子とMIMEタイプを追加
add_filter( 'upload_mimes', 'add_avif_to_upload_mimes' );
function add_avif_to_upload_mimes( $mimes ) { $mimes['avif'] = 'image/avif'; return $mimes;
}
// AVIFファイルのアップロードを許可
add_filter( 'wp_check_filetype_and_ext', 'wpse_file_and_ext_avif', 10, 4 );
function wpse_file_and_ext_avif( $types, $file, $filename, $mimes ) { if ( false !== strpos( $filename, '.avif' ) ) { $types['ext'] = 'avif'; $types['type'] = 'image/avif'; } return $types;
}