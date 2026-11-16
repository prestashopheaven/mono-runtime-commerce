# Changelog

All packages of this monorepo share one version. Per package details: its own `CHANGELOG.md`.

## 1.0.0

- `runtime-voucher` 1.0.0: `VoucherSpec` (percentage or amount, prefix, hours, customer, shop, products, names,
  highlight), `VoucherCode`, `VoucherIssuer` (personal one-time cart rule with shop and product restriction, `find()`,
  `isUsable()`), `IssuedVoucher`, `VoucherException`, `VoucherNotIssuedException`.
- `runtime-cart` 1.0.0: `CartRecoveryLink` (PrestaShop's own recover_cart link to the cart page).
- Fixture module `tests/fixture/heavenmonocommerce`: the integration tests in real shops.

## Before 1.0.0

- Monorepo created (2026-11-16).
