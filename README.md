# PHP Array Key Type Coercion Bug

This repository demonstrates a common, yet subtle, bug in PHP related to array key type coercion.  When using non-string keys (booleans, integers, etc.), PHP's type juggling can lead to unexpected and incorrect results.  The example shows how boolean and integer keys are cast, potentially overwriting data.

The `bug.php` file shows the problematic code, while `bugSolution.php` demonstrates how to fix the issue by always using explicit string keys.