<?php
/**
 * TAVARDT Elite WordPress Security Configuration Snippets
 * 
 * Instructions: Add these snippets to your wp-config.php file, 
 * just before the "That's all, stop editing! Happy publishing." line.
 */

// 1. Force SSL for Admin Area and Logins
define( 'FORCE_SSL_ADMIN', true );

// 2. Disable File Editing in Dashboard (Crucial for B2B)
// Prevents compromised admin accounts from executing PHP via theme/plugin editors
define( 'DISALLOW_FILE_EDIT', true );

// 3. Disable native WP Cron
// Use an actual server cron job (e.g., cPanel/CyberPanel) for better performance
define( 'DISABLE_WP_CRON', true );

// 4. Limit Post Revisions to prevent Database bloat
define( 'WP_POST_REVISIONS', 5 );

// 5. Change the Autosave Interval (Default is 60 seconds)
define( 'AUTOSAVE_INTERVAL', 160 ); // Seconds

// 6. Block external HTTP requests (Optional/Aggressive)
// define('WP_HTTP_BLOCK_EXTERNAL', true);
// define('WP_ACCESSIBLE_HOSTS', 'api.wordpress.org,*.github.com');
