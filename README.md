# PHP Unexpected Boolean Comparison Bug
This repository demonstrates a common, yet subtle bug in PHP related to comparing a function's return value with boolean true.  The issue arises from how PHP handles type juggling and implicit type conversions.

## Problem
The `myFunc()` function might return different data types depending on the logic inside.  In this case it sometimes returns a boolean and sometimes an integer. Comparing it directly to `true` can lead to unexpected results based on PHP's loose typing and its type coercion.

## Solution
The solution explicitly casts the function's return value to a boolean using (bool) before comparison. This ensures that the comparison is made with consistent data types, eliminating ambiguity and resolving the unexpected behavior. 
