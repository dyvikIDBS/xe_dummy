# Discount calculation review demo

Review evaluation only. Do not merge. This standalone example is not referenced
by any XE project and does not change application or deployment behavior.

## Requirements

- Apply the supplied whole-number percentage discount to the subtotal.
- Preserve decimal precision; do not round intermediate calculations.
- Accept discounts from 0 through 100 inclusive.
- Reject negative subtotals and discount percentages outside the accepted range.

## Expected examples

| Subtotal | Discount percent | Expected total |
| --- | --- | --- |
| 200.00 | 15 | 170.00 |
| 99.50 | 10 | 89.55 |
| 200.00 | 0 | 200.00 |
| 200.00 | 100 | 0.00 |

The companion PHP sample intentionally contains one syntax error and one logic
error for code-review practice. It is not production code and is expected to
fail PHP linting until the syntax error is found.