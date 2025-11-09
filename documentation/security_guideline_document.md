# Laravel Admin Template: Security Guidelines

This document outlines secure-by-design practices tailored to the **laravel-template-admin** codebase. It translates core security principles into actionable recommendations, ensuring robust protection across all layers.

---

## 1. Authentication & Access Control

- **Strong Password Policy:**
  - Enforce minimum length (≥ 12 chars) and complexity (uppercase, lowercase, number, symbol) via custom validation rules (e.g., in `RegisterRequest`).
  - Rotate salts and use Argon2 or bcrypt (configured in `config/hashing.php`).
- **Multi-Factor Authentication (MFA):**
  - Integrate a 2FA package (e.g., Laravel Fortify or Google Authenticator) for sensitive accounts.
- **Session Management:**
  - In `config/session.php`, set:
    - `secure = true`
    - `http_only = true`
    - `same_site = 'lax'` or `strict`
  - Enforce idle and absolute timeouts. Clear sessions on logout.
  - Regenerate session ID on login to prevent fixation.
- **Role-Based Access Control (RBAC):**
  - Define roles & permissions in database or config.
  - Enforce via middleware (`can:` or custom) on all admin routes.
  - Verify in controllers, not just views.
- **Email Verification & Password Reset:**
  - Use Laravel’s built-in email verification (`MustVerifyEmail` interface).
  - Ensure reset tokens are single-use and expire promptly.

---

## 2. Input Validation & Output Encoding

- **Server-Side Validation:**
  - Use Form Request classes (`app/Http/Requests/`).
  - Define strict rules (e.g., `alpha_num`, `max:255`, `mimes:jpg,png,pdf`).
- **Prevent SQL Injection:**
  - Always use Eloquent or parameterized queries. Do not concatenate user input into raw queries.
- **Prevent XSS:**
  - Escape all Blade outputs (`{{ $var }}` vs. `{!! !!}`).
  - Sanitize rich text input (CKEditor) with a purifier library before saving.
- **Template Injection:**
  - Do not pass untrusted data into view includes or `@component` paths.
- **Redirect Validation:**
  - Validate redirect URLs against an allow‐list using `Illuminate\Support\Str::startsWith()`.

---

## 3. File Upload Security

- **Validation & Sanitization:**
  - In upload requests, enforce:
    - Allowed extensions and MIME types.
    - Maximum file size limits.
  - Rename files to safe, unique identifiers (e.g., `Str::uuid()`).
- **Storage Isolation:**
  - Store uploads in `storage/app/private` (not under `public/`).
  - Serve via signed URLs or streaming controllers.
- **Malware Scanning:**
  - Integrate an antivirus scanner (e.g., ClamAV) in the upload pipeline.
- **Path Traversal Prevention:**
  - Use Laravel’s storage disk methods (`Storage::putFile()`), never trust user‐provided paths.

---

## 4. Data Protection & Privacy

- **Encryption In Transit:**
  - Enforce HTTPS for all endpoints (redirect HTTP → HTTPS). Configure `TrustProxies` and HSTS header.
- **Encryption At Rest:**
  - Encrypt sensitive fields (e.g., PII) via Laravel’s `encrypt()`/`decrypt()` or database builtin encryption.
- **Secret Management:**
  - Do **not** commit `.env` to Git. Use environment variables or a secrets manager (AWS Secrets Manager, HashiCorp Vault).
- **Logging & Error Handling:**
  - In `config/app.php`, set `app_debug = false` in production.
  - Do not reveal stack traces or SQL errors to users. Log exceptions securely.
  - Mask PII in logs. Implement rate limiting on error endpoints to avoid information leakage.

---

## 5. API & Service Security

- **HTTPS Only:**
  - All API endpoints must require TLS (≥ 1.2). Reject insecure requests.
- **Authentication & Rate Limiting:**
  - Use Laravel Sanctum or Passport for API tokens, enforcing scopes and expiration.
  - Apply throttling middleware (`throttle:60,1`) on login and public endpoints to mitigate brute‐force.
- **CORS Policy:**
  - In `config/cors.php`, restrict `allowed_origins` to trusted domains.
- **Minimal Data Exposure:**
  - Serialize only required fields (`$hidden`, `$visible` in models).
  - Implement API versioning in URL (`/api/v1/…`).

---

## 6. Web Application Security Hygiene

- **CSRF Protection:**
  - Enable Laravel’s CSRF middleware. Include `@csrf` in all state‐changing forms.
- **Security Headers:**
  - Via middleware or server config, set:
    - `Content-Security-Policy` to restrict script/styles sources.
    - `X-Frame-Options: DENY` or `SAMEORIGIN`.
    - `X-Content-Type-Options: nosniff`.
    - `Referrer-Policy: strict-origin-when-cross-origin`.
- **Secure Cookies:**
  - In `config/session.php` and `config/cookie.php`, apply `HttpOnly`, `Secure`, and `SameSite` attributes.
- **Subresource Integrity (SRI):**
  - When loading external scripts/styles, include integrity hashes.

---

## 7. Infrastructure & Configuration Management

- **Docker Hardening:**
  - Base images: use official, minimal PHP/FPM containers.
  - Run non‐root wherever possible. Drop unnecessary capabilities.
  - Pin dependency versions in `Dockerfile` and `docker-compose.yml`.
- **Server Hardening:**
  - Disable unused services, close non‐essential ports.
  - Apply OS and package updates via automated patch management.
- **Environment Segregation:**
  - Use separate configs for dev/test/prod. Do not enable debug or verbose logs in production.
- **File & Directory Permissions:**
  - `storage/` and `bootstrap/cache/` writable only by the web server user.
  - All other directories non‐writable.

---

## 8. Dependency & CI/CD Security

- **Secure Dependencies:**
  - Maintain `composer.lock` and `package-lock.json`.
  - Regularly run `composer audit` and `npm audit`.
  - Remove unused libraries (e.g., stale JS plugins in `public/assets/libs`).
- **Continuous Scanning:**
  - Integrate SCA tools (e.g., GitHub Dependabot, Snyk) to catch vulnerabilities.
- **CI/CD Pipeline:**
  - Enforce linting, static analysis (e.g., PHPStan, Psalm), and unit tests before merging.
  - Run security scans (SAST) on pull requests.
  - Deploy with least‐privilege credentials and ephemeral tokens.

---

## 9. Monitoring & Incident Response

- **Logging & Alerting:**
  - Centralize logs (e.g., ELK, Papertrail). Monitor critical events (failed logins, permission denials).
- **Rate-Limit Alerts:**
  - Trigger alerts on abnormal traffic spikes (potential DDoS or credential stuffing).
- **Regular Penetration Testing:**
  - Schedule periodic security reviews and pentests. Remediate findings promptly.

---

### Conclusion
By systematically applying these guidelines, the **laravel-template-admin** codebase will adhere to best practices in secure development, ensuring confidentiality, integrity, and availability across the system. Continuous review, automated scanning, and an incident‐ready posture will maintain security resilience over time.
