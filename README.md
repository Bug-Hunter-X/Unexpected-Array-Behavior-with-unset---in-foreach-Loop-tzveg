# PHP Foreach and Unset() Bug

This repository demonstrates a subtle but common error in PHP when using `unset()` within a `foreach` loop on an array.  The issue arises from how PHP's internal array pointer behaves when elements are removed during iteration. This can lead to skipped elements or unexpected results.

The `bug.php` file contains the buggy code, while `bugSolution.php` provides a corrected version.

## Problem

When an element is unset, the internal pointer of the `foreach` loop doesn't always adjust correctly, which might skip elements, particularly when the next element shares the same index as the deleted one. This is because `unset()` removes an element, but PHP will proceed with the *next* index, not necessarily the next element in the *original* array structure. 