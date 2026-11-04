# Mirza Pro 0.9.3

This release handles expired or invalid service-renewal confirmations without PHP warnings or changes to an unrelated user flow.

- Validate saved renewal data before reading its invoice and product identifiers. A scalar such as `0`, malformed JSON or missing fields now produces the existing restart-selection message.
- Confirm invoice ownership and panel availability before continuing. Reject missing products and invalid custom duration/traffic values before price or billing work.
- Validate saved discount context before using it. Keep normal, custom and discounted renewal price calculations unchanged for valid requests.
- Reject invalid confirmations without resetting the user's current step or saved context. Invalid callbacks do not reach panel calls or billing.
- Retain the cron, runtime, payment-history preservation and subdirectory compatibility fixes from earlier fork releases.

Regression coverage exercises the actual confirmation-handler source through the boundary before panel access and billing. It covers expired state, invalid identifiers, missing or foreign invoices, missing panels/products, invalid custom values, discount context and valid prices. Confirmation buttons retain the existing generic callbacks and use the current saved renewal context.

Validation also passed against a fresh isolated MySQL copy with network access disabled and a test account restricted to that copy. Wallets, payments, history and user context stayed unchanged; all copied rows and schema definitions matched after transaction rollback. The active bot, production database and CLI cron were not modified.

Download the hosting ZIP, which includes the locked Composer dependencies, and verify its SHA-256 file. PHP 8.5.12 or newer remains required. No database migration or configuration change is required by this patch. Preserve your existing `config.php` and runtime storage when deploying; this release does not install itself or alter any running bot, CLI cron or website setting.
