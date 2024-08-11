<?php
namespace NCB;

defined( 'ABSPATH' ) || exit;

class Frontend {
    public function __construct() {
        add_action( 'wp_footer', array( $this, 'render' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
    }

    public function enqueue() {
        wp_enqueue_style( 'ncb-style', NCB_PLUGIN_URL . 'assets/css/style.css', array(), time() );
        wp_enqueue_script( 'ncb-script', NCB_PLUGIN_URL . 'assets/js/frontend.js', array( 'jquery' ), time(), true );
    }

    public function render() {
        ?>
        <div id="contact-box">
            <div class="popup">
                <a href="https://m.me/61556748640318" target="_blank" class="item">
                    <div class="logo">
                        <img src="<?php echo NCB_PLUGIN_URL . 'assets/images/messenger.svg'; ?>" width="50%">
                    </div>
                    <div class="meta">
                        <p class="title"><?php esc_html_e( 'Facebook Messenger', 'ncb' ); ?></p>
                        <small class="description"><?php esc_html_e( 'Get support via Messenger', 'ncb' ); ?></small>
                    </div>
                </a>
                <div class="divide"></div>
                <a href="https://t.me/namncn/" target="_blank" class="item">
                    <div class="logo">
                        <img src="<?php echo NCB_PLUGIN_URL . 'assets/images/telegram.svg'; ?>">
                    </div>
                    <div class="meta">
                        <p class="title"><?php esc_html_e( 'Telegram', 'ncb' ); ?></p>
                        <small class="description"><?php esc_html_e( 'Get support via Telegram', 'ncb' ); ?></small>
                    </div>
                </a>
            </div>
            <div class="container">
                <div class="dot-ping">
                    <div class="ping"></div>
                    <div class="dot"></div>
                </div>
                <div class="contact-icon">
                    <svg data-testid="geist-icon" height="20" stroke-linejoin="round" viewBox="0 0 16 16" width="20" style="color: currentcolor;">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.8914 10.4028L2.98327 10.6318C3.22909 11.2445 3.5 12.1045 3.5 13C3.5 13.3588 3.4564 13.7131 3.38773 14.0495C3.69637 13.9446 4.01409 13.8159 4.32918 13.6584C4.87888 13.3835 5.33961 13.0611 5.70994 12.7521L6.22471 12.3226L6.88809 12.4196C7.24851 12.4724 7.61994 12.5 8 12.5C11.7843 12.5 14.5 9.85569 14.5 7C14.5 4.14431 11.7843 1.5 8 1.5C4.21574 1.5 1.5 4.14431 1.5 7C1.5 8.18175 1.94229 9.29322 2.73103 10.2153L2.8914 10.4028ZM2.8135 15.7653C1.76096 16 1 16 1 16C1 16 1.43322 15.3097 1.72937 14.4367C1.88317 13.9834 2 13.4808 2 13C2 12.3826 1.80733 11.7292 1.59114 11.1903C0.591845 10.0221 0 8.57152 0 7C0 3.13401 3.58172 0 8 0C12.4183 0 16 3.13401 16 7C16 10.866 12.4183 14 8 14C7.54721 14 7.10321 13.9671 6.67094 13.9038C6.22579 14.2753 5.66881 14.6656 5 15C4.23366 15.3832 3.46733 15.6195 2.8135 15.7653Z" fill="currentColor"></path>
                    </svg>
                </div>
                <span style="font-weight: bold;"><?php esc_html_e( 'Contact us', 'ncb' ); ?></span>
            </div>
        </div>
        <?php
    }
}

new Frontend();
