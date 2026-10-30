# Mirza Pro 0.9.2

This release fixes cron auto-registration warnings in restricted PHP web environments while preserving an existing CLI scheduler.

- Recognize a recent dispatcher heartbeat running PHP 8.5 or newer with PDO MySQL, and leave the existing cron registration alone when opening the admin menu or checking cron status.
- Skip cron registration when `shell_exec` is unavailable, before probing for system executables or attempting cron cleanup.
- Treat PHP executable paths blocked by `open_basedir` as unavailable without emitting warnings. Never use the PHP-FPM executable as a CLI fallback.
- Report cron repair success only when a healthy dispatcher exists or registration succeeds. A stopped dispatcher still shows the existing manual setup instructions.
- Retain the runtime, payment-history preservation and subdirectory compatibility fixes from 0.9.1.

Regression tests exercise the real scheduler helpers with shell execution disabled and restricted filesystem access, healthy and invalid heartbeat files, supported CLI registration, and the admin repair response. No database or real crontab is loaded by these tests.

Download the hosting ZIP, which includes the locked Composer dependencies, and verify its SHA-256 file. PHP 8.5.12 or newer remains required. No database migration or configuration change is required by this patch. Preserve your existing `config.php` and runtime storage when deploying; this release does not install itself or alter any running bot, CLI cron or website setting.
