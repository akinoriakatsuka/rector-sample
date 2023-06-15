# Sample code for Rector

## install

```bash
composer install
```

## excute

```bash
vendor/bin/rector process src --dry-run
```

## result

```bash
 1/1 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%
1 file with changes
===================

1) src/Sample.php:1

    ---------- begin diff ----------
@@ @@

 final class Sample
 {
-    public function run()
+    public function run(): int
     {
         return 5;
-
-        // we never get here
-        return 10;
     }

-    public function run2()
+    public function run2(): string
     {
         $array = [1, 2, 3];
-        return implode($array, ',');
+        return implode(',', $array);
     }

-    public function run3()
+    public function run3(): int
     {
         $result = new PgSql\Result;
        return pg_numrows($result);
@@ @@

     public function run4() : string
     {
-        return aaa;
+        return \AAA;
     }
 }
    ----------- end diff -----------

Applied rules:
 * ReturnTypeFromStrictScalarReturnExprRector
 * ConsistentImplodeRector (http://php.net/manual/en/function.implode.php#refsect1-function.implode-description)
 * RemoveUnreachableStatementRector
 * SensitiveConstantNameRector (https://wiki.php.net/rfc/case_insensitive_constant_deprecation)


                                                                                                                        
 [OK] 1 file would have changed (dry-run) by Rector    
```