# NFQ-HomeWork

<h5>Kodėl Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’) yra 6?</h5><br />
<p>Tai funckijos argumentai bus paverčiami i int tipa Pvz: 2.2 bus apvalinamas i 2, '1' bus keiciamas i 1;</p>

<h5>Kas ir kodėl nutiko bandant kviesti Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’)? </h5><br />
<p>Nuo 7 PHP versijos mus yra suteikiama galimybė įjungtį strict mode. Deklaruodami (strict_types=1) mes užtikriname kad argumentas kuris bus naudojamas funkcijoje bus float tipo. Užduoties metu aš naudojau trys argumentus, du float tipo ir trečias string tipo. Bandant vykdyti funkciją aš gaunu "TypeError" dėl to, kad trečias argumentas funkcijoje yra string tipo, o norit viskus argumentus sėkmingai sudėti, 3 argumentas turėtu buti float tipo, tada TypeError nebutu rodamas </p>

