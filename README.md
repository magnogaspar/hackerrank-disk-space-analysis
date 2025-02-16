# Hacker Rank - Disk Space Analysis
PHP solution for HackerRank's Disk space analysis challenge.

Based on the C# solution by [dehghani-mehdi](https://github.com/dehghani-mehdi) but in PHP.

## Example
For following array `[2, 5, 4, 6, 8]` with `x = 3`, the answer is `4` _see below_

The chunks would be:
- `[2, 5, 4]` -> min: `2`
- `[5, 4, 6]` -> min: `4`
- `[4, 6, 8]` -> min: `4`

## Solution
1. Find minimum for first chunk and set the initial maximum with this value
2. Find the minimum for each chunk and compare with the current maximum if it's greater, set the new maximum

## Test

```
$n = 100000;
$x = rand(1, $n);
$testCase = [];
for ($i = 0; $i < $n; $i++) $testCase[] = rand(1, 1000000000);

$starttime = microtime(true);

findMax($testCase, $x);

$endtime = microtime(true);
$timediff = $endtime - $starttime;

echo 'Elapsed time (ms): ' . $timediff;
```

Result for 10 times: (_CPU Corei5-i5-8265U CPU @ 1.60GHz_)
```
24.0494 ms
8.2966 ms
3.8909 ms
22.5330 ms
8.9014 ms
3.4777 ms
18.6163 ms
25.2535 ms
14.2562 ms
24.7417 ms
```

---

If you find a testcase which this code doesn't works for, or you find any other problem, please file an issue.
