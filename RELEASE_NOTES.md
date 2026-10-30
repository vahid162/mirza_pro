# Mirza Pro 0.9.1

This fork release fixes warnings observed on PHP 8.5 and preserves deployment compatibility for bots installed below a domain subdirectory.

- Format exhausted or invalid traffic values without `NAN`, unit-index warnings, or rounding through logarithm reconstruction.
- Reject non-string Base64 input without deprecation warnings.
- Return a controlled response when an invoice refers to a missing panel. Existing invoice-to-panel associations are preserved; no panel is guessed or reassigned.
- Validate Marzban users responses, record safe HTTP/cURL diagnostics, continue scanning healthy panels, and report partial on-hold scan failures to the cron dispatcher.
- Preserve pending-order history associated with any direct or legacy payment record. Ambiguous historical attempts are retained; genuinely unlinked unpaid drafts keep their existing cancellation behavior.
- Leave scheduled order-history cleanup disabled by default.
- Resolve Mini App assets, routes, API calls and the panel keyboard API relative to the installation path.

Download the hosting ZIP, which includes the locked Composer dependencies, and verify its SHA-256 file. PHP 8.5.12 or newer remains required. The upstream server installer is unchanged; this release does not install or update a running server automatically.

Validation includes offline regression tests and testing against an isolated database copy. No production database dump, configuration, credentials, or customer data is included. A real purchase, payment, or Telegram message is not used as a test.
