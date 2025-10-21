<?php
#⠀⣤⣄⣴⣶⣿⣿⣶⣶⣦⣤⣤⣤⣶⣶⣶⣶⣶⣶⣶⣶⣾⣿⣿⣶⣀⣶⣆⣶⣦
#⠉⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿
#⢀⣀⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇
#⠈⠛⠛⢿⣿⣿⣿⣿⣿⠛⡟⠛⢿⡿⠛⠛⠛⠛⠛⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
#⠀ ⢀⣿⣿⣿⣿⣿⣧⣀⣀⣀⡼⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
#   ⣼⣿⣿⣿⣿⣿⠋⠉⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀╔═.𒅌. ═════════════╗⠀⠀⠀
#  ⢀⣿⣿⣿⣿⣿⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀     ℳ𝒶𝓇𝒸ℴ𝓈 𝒱𝒾𝓃𝒾𝒸𝒾𝓊𝓈
#  ⢰⣿⣿⣿⣿⣿⡏⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀  𝒢𝓊𝒾𝓁𝒽ℯ𝓇𝓂ℯ ℬ𝒶𝓇𝓇ℯ𝓉ℴ
#  ⣼⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀  ╚═════════════.𒍜. ═╝ ⠀⠀⠀⠀
#  ⠉⠙⠛⠿⠿⣿⠇⠀⠀⠀⠀                
     
#                              ░░╔══╗░░░░░░░░░░╔══╗░░
#                              ░╚╣▐▐╠╝░░╔══╗░░╚╣▐▐╠╝░
#                              ░░╚╦╦╝░░╚╣▌▌╠╝░░╚╦╦╝░░
#                              ░░░╚╚░░░░╚╦╦╝░░░░╚╚░░░
#                              ░░░░░░░░░░╝╝░░░░░░░░░░
echo"<link rel='stylesheet' href='estilo.css'>";
$arquivo = "clientes.json";
if(file_exists($arquivo)){
    $clientes = json_decode(file_get_contents($arquivo),true);
    echo "<h2 class='h2Clientes'>Lista de Clientes</h2>";
    echo "<ul class='ulClientes'>";
    foreach ($clientes as $c){
    echo "<li class='liClientes'>{$c['idPessoa']} - {$c['nome']} - CPF: {$c['cpf']} - Saldo: {$c['saldo']}</li>";
}    
echo "</ul>";
} else {
echo "Nenhum cliente cadastrado.";
}
echo "<a class='aClientes' href='index.html'>🔙 Voltar ao Menu</a>"
?>

