<!DOCTYPE html>
<html>

<head>
  <title>{$title}</title>
</head>

<body>
  {assign var="listService" value=["Hosting cheap"=>3, "Hosting Pro"=>4, "Hosting Enterprise"=>5, "VPS Cheap"=>6, "VPS Pro"=>7, "VPS Enterprise"=>8]}
  {assign var="totals" value=["Hosting"=>0, "VPS"=>0, "Firewall"=>0]}
  {foreach $listService as $key => $value}
    {if $key|strstr:"Hosting"}
      {$totals.Hosting = {math equation="x + y" x=$totals.Hosting y=$value}}
    {elseif  $key|strstr:"VPS"}
      {$totals.VPS = {math equation="x + y" x=$totals.VPS y=$value}}
    {elseif  $key|strstr:"Firewall"}
      {$totals.Firewall = {math equation="x + y" x=$totals.Firewall y=$value}}
    {/if}
  {/foreach}

  {assign "newArray" []}

  {foreach $totals as $key => $value}
    {if $value ne 0}
      {$newArray[$key] = $value}
    {/if}
  {/foreach}
  <h1>{$title}</h1>
  <p>{$content}</p>
  {debug}
</body>

</html>