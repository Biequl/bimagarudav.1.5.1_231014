<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 goto D8MPe; i5lWu: exit("\116\157\40\144\151\x72\145\x63\x74\x20\x73\143\162\151\160\x74\40\x61\x63\x63\145\163\163\x20\x61\154\154\157\167\x65\x64"); goto MAMLj; D8MPe: if (defined("\102\x41\123\105\x50\x41\x54\x48")) { goto u1L8n; } goto i5lWu; MAMLj: u1L8n: goto FyHXX; FyHXX: class Compare extends CI_Controller { function __construct() { goto jdSLF; LkWVA: $this->DB2 = $this->load->database("\154\151\x76\145", TRUE); goto xXZrp; jd3sA: $this->DB1 = $this->load->database("\x6d\141\x69\x6e\x5f\x67\x61\162\165\144\x61", TRUE); goto LkWVA; TaVWe: $this->CHARACTER_SET = "\x75\164\x66\x38\40\x43\117\x4c\x4c\101\x54\x45\x20\x75\x74\x66\70\x5f\x67\145\156\x65\x72\141\154\137\x63\x69"; goto jd3sA; jdSLF: parent::__construct(); goto TaVWe; xXZrp: } function index() { goto QnYAB; UVVeF: $development_tables = $this->DB1->list_tables(); goto QzU76; hKJlq: $sql_commands_to_run = is_array($tables_to_update) && !empty($tables_to_update) ? array_merge($sql_commands_to_run, $this->update_existing_tables($tables_to_update)) : ''; goto eqTT9; jwWcu: goto Qv3oe; goto ruqg6; eqTT9: if (is_array($sql_commands_to_run) && !empty($sql_commands_to_run)) { goto JZ1GB; } goto MJQ5n; Ih0PI: Qv3oe: goto ObHRD; BjYRj: echo "\74\160\162\x65\x3e\12"; goto Ih0PI; C2D1w: $tables_to_update = array_diff($tables_to_update, $tables_to_create); goto hKJlq; yUzXY: $tables_to_drop = array_diff($live_tables, $development_tables); goto CgA3F; N40Ba: echo "\x3c\160\76\124\150\x65\40\x66\157\154\154\x6f\167\151\x6e\x67\40\123\x51\x4c\x20\143\x6f\x6d\155\141\x6e\144\x73\x20\x6e\x65\145\144\40\164\157\x20\x62\x65\40\145\170\145\x63\165\x74\145\x64\40\164\x6f\40\142\162\151\156\x67\40\x74\x68\145\x20\114\x69\x76\145\x20\x64\141\x74\141\x62\141\x73\x65\40\x74\141\x62\154\x65\163\40\x75\160\x20\164\157\40\x64\x61\x74\x65\x3a\x20\74\57\x70\x3e\xa"; goto EVwfC; EVwfC: echo "\74\x70\162\x65\40\163\164\x79\154\145\75\47\160\x61\x64\x64\151\156\x67\x3a\40\62\x30\160\x78\73\x20\142\x61\143\153\x67\x72\157\x75\156\144\55\x63\157\x6c\157\x72\72\x20\x23\106\x46\x46\x41\x46\x30\x3b\47\x3e\xa"; goto Nh0lB; QnYAB: $sql_commands_to_run = array(); goto UVVeF; Nh0lB: foreach ($sql_commands_to_run as $sql_command) { echo "{$sql_command}\xa"; pIMuh: } goto O0Wnp; O0Wnp: PeNBy: goto BjYRj; OGa6A: $tables_to_create = array_diff($development_tables, $live_tables); goto yUzXY; lzTaK: $sql_commands_to_run = is_array($tables_to_drop) && !empty($tables_to_drop) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_drop, "\144\162\x6f\160")) : array(); goto unORP; MJQ5n: echo "\x3c\x68\62\x3e\x54\150\145\40\x64\141\164\141\x62\141\x73\145\x20\x61\x70\160\x65\141\x72\163\x20\x74\x6f\40\x62\x65\40\165\160\40\x74\157\40\144\141\164\145\74\x2f\150\x32\76\12"; goto jwWcu; CgA3F: $sql_commands_to_run = is_array($tables_to_create) && !empty($tables_to_create) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_create, "\x63\162\145\141\164\145")) : array(); goto lzTaK; unORP: $tables_to_update = $this->compare_table_structures($development_tables, $live_tables); goto C2D1w; QzU76: $live_tables = $this->DB2->list_tables(); goto OGa6A; NzVrv: echo "\x3c\150\x32\76\124\x68\x65\40\x64\x61\164\141\x62\141\x73\x65\40\x69\x73\40\157\x75\x74\x20\x6f\146\x20\123\171\156\143\x21\x3c\x2f\x68\62\76\12"; goto N40Ba; ruqg6: JZ1GB: goto NzVrv; ObHRD: } function manage_tables($tables, $action) { goto WLept; wKktm: foreach ($tables as $table) { $sql_commands_to_run[] = "\104\122\x4f\120\x20\x54\101\102\x4c\x45\40{$table}\73"; wm6k4: } goto dEqA6; vQDzH: if (!($action == "\x64\x72\x6f\x70")) { goto U2Wlq; } goto wKktm; dEqA6: cTAt1: goto k615d; kH1T8: foreach ($tables as $table) { goto VsFuN; Yb4JB: t1ebB: goto MT925; KqAi5: $table_structure = $query->row_array(); goto YMZoV; YMZoV: $sql_commands_to_run[] = $table_structure["\103\x72\x65\x61\x74\145\x20\x54\141\142\x6c\x65"] . "\73"; goto Yb4JB; VsFuN: $query = $this->DB1->query("\x53\110\x4f\x57\x20\x43\122\105\x41\x54\x45\x20\x54\101\x42\x4c\105\x20\140{$table}\x60\40\55\x2d\40\x63\162\145\x61\x74\x65\x20\164\x61\142\154\145\x73"); goto KqAi5; MT925: } goto s4rwv; k615d: U2Wlq: goto Tl65i; aMJMf: if (!($action == "\143\162\145\x61\164\145")) { goto aBT42; } goto kH1T8; WLept: $sql_commands_to_run = array(); goto aMJMf; s4rwv: HYZGv: goto pGHQT; pGHQT: aBT42: goto vQDzH; Tl65i: return $sql_commands_to_run; goto vzOz1; vzOz1: } function compare_table_structures($development_tables, $live_tables) { goto EvaGd; dkr78: d0KDj: goto PommH; l1xz8: return $tables_need_updating; goto WW0n1; sy7CV: suFHE: goto l1xz8; uGkEX: $live_table_structures = $development_table_structures = array(); goto Yth9G; PommH: foreach ($live_tables as $table) { goto QhYIb; QhYIb: $query = $this->DB2->query("\123\x48\117\x57\40\103\x52\x45\101\x54\105\x20\x54\x41\102\114\105\x20\x60{$table}\x60\40\x2d\x2d\x20\154\151\x76\145"); goto MOwQS; MOwQS: $table_structure = $query->row_array(); goto lguOs; vnh7v: rv80t: goto srfhh; lguOs: $live_table_structures[$table] = $table_structure["\x43\162\145\141\x74\x65\x20\124\141\142\x6c\x65"]; goto vnh7v; srfhh: } goto tpUFo; tpUFo: s8ubj: goto UikfB; UikfB: foreach ($development_tables as $table) { goto QDKdj; QDKdj: $development_table = $development_table_structures[$table]; goto Xm1xw; Xm1xw: $live_table = isset($live_table_structures[$table]) ? $live_table_structures[$table] : ''; goto n1ATD; iXnsP: $tables_need_updating[] = $table; goto fb6GF; fb6GF: z0T76: goto KGEaH; n1ATD: if (!($this->count_differences($development_table, $live_table) > 0)) { goto z0T76; } goto iXnsP; KGEaH: L6vYC: goto IHaaL; IHaaL: } goto sy7CV; EvaGd: $tables_need_updating = array(); goto uGkEX; Yth9G: foreach ($development_tables as $table) { goto nUjY3; kCQwe: fGkU3: goto yOtlb; nUjY3: $query = $this->DB1->query("\x53\x48\x4f\x57\x20\103\x52\105\101\124\x45\40\x54\x41\102\114\x45\40\140{$table}\140\40\55\x2d\x20\144\145\166"); goto xJWAo; xJWAo: $table_structure = $query->row_array(); goto Ub4tE; Ub4tE: $development_table_structures[$table] = $table_structure["\x43\x72\145\x61\164\145\40\x54\141\142\154\x65"]; goto kCQwe; yOtlb: } goto dkr78; WW0n1: } function count_differences($old, $new) { goto rGY1M; WnlhW: return $differences; goto sNo0V; Esg5n: return $differences; goto eo81o; nQ7OT: $new = trim(preg_replace("\57\134\x73\x2b\x2f", '', $new)); goto XtZzP; WU55i: HJnzq: goto gKin7; rGY1M: $differences = 0; goto DUJmK; OipEK: $length = max(count($old), count($new)); goto BmOlp; qPKTb: $new = explode("\40", $new); goto OipEK; UK6aw: if (!($old[$i] != $new[$i])) { goto UF0eM; } goto bjJ2l; DUJmK: $old = trim(preg_replace("\x2f\134\x73\53\x2f", '', $old)); goto nQ7OT; LTDCP: iU5bM: goto ty_DM; bjJ2l: $differences++; goto MiGHF; XtZzP: if (!($old == $new)) { goto FtjBx; } goto Esg5n; ty_DM: $i++; goto PUO_r; PUO_r: goto HJnzq; goto Fpkne; eo81o: FtjBx: goto Rj34B; MiGHF: UF0eM: goto LTDCP; Rj34B: $old = explode("\x20", $old); goto qPKTb; BmOlp: $i = 0; goto WU55i; gKin7: if (!($i < $length)) { goto Du40f; } goto UK6aw; Fpkne: Du40f: goto WnlhW; sNo0V: } function update_existing_tables($tables) { goto LqWHq; DUtpT: foreach ($tables as $table) { goto bQA7p; t7SzL: $table_structure_live[$table] = $this->table_field_data((array) $this->DB2, $table); goto C3CS3; bQA7p: $table_structure_development[$table] = $this->table_field_data((array) $this->DB1, $table); goto t7SzL; C3CS3: krc3R: goto nlC4I; nlC4I: } goto ayNa9; BUMYo: if (!(is_array($tables) && !empty($tables))) { goto IgoXd; } goto DUtpT; ypzAC: IgoXd: goto zOp_j; hTBqR: $table_structure_development = array(); goto JSpYD; ayNa9: lvRGV: goto ypzAC; x61_Z: return $sql_commands_to_run; goto dPpm5; zOp_j: $sql_commands_to_run = array_merge($sql_commands_to_run, $this->determine_field_changes($table_structure_development, $table_structure_live)); goto x61_Z; JSpYD: $table_structure_live = array(); goto BUMYo; LqWHq: $sql_commands_to_run = array(); goto hTBqR; dPpm5: } function table_field_data($database, $table) { goto HYPj7; vaXBA: C5UHJ: goto wnWoB; Qc0Sl: goto C5UHJ; goto NEDzj; NEDzj: MYaBp: goto Y5_9Z; HYPj7: $conn = mysqli_connect($database["\x68\x6f\163\x74\x6e\x61\x6d\145"], $database["\165\x73\x65\x72\156\x61\x6d\x65"], $database["\x70\141\163\x73\167\157\x72\144"]); goto rB_M_; rB_M_: mysql_select_db($database["\144\141\x74\141\x62\141\x73\145"]); goto wCC5G; wnWoB: if (!($row = mysql_fetch_assoc($result))) { goto MYaBp; } goto rjsQc; Y5_9Z: return $fields; goto ygkTc; rjsQc: $fields[] = $row; goto Qc0Sl; wCC5G: $result = mysql_query("\x53\x48\x4f\127\40\x43\117\x4c\x55\x4d\x4e\123\x20\106\122\x4f\115\40\140{$table}\140"); goto vaXBA; ygkTc: } function determine_field_changes($source_field_structures, $destination_field_structures) { goto MxFT4; zTtsW: foreach ($source_field_structures as $table => $fields) { goto TsJ7M; xS_ki: uQDvl: goto HwUFX; HwUFX: q7z11: goto mSbFi; TsJ7M: foreach ($fields as $field) { goto u7aDd; sByHI: $modify_field .= isset($previous_field) && $previous_field != '' ? "\40\101\106\x54\105\x52\40" . $previous_field : ''; goto HRKLT; r04mz: $modify_field .= isset($fields[$n]["\105\x78\x74\x72\x61"]) && $fields[$n]["\x45\170\164\x72\141"] != '' ? "\x20" . $fields[$n]["\x45\x78\164\162\141"] : ''; goto sByHI; Mpz0h: OUvKy: goto svh7o; e7umb: $modify_field .= isset($fields[$n]["\x4e\x75\154\154"]) && $fields[$n]["\x4e\x75\x6c\x6c"] == "\x59\x45\x53" ? "\x20\116\125\114\x4c" : "\40\116\117\x54\x20\x4e\125\x4c\114"; goto r04mz; BwFgW: $modify_field = "\x41\x4c\x54\x45\122\40\x54\101\x42\114\105\40{$table}\x20\x4d\x4f\104\111\x46\131\x20\103\117\114\125\115\116\x20\140" . $fields[$n]["\106\151\145\x6c\x64"] . "\140\40" . $fields[$n]["\x54\171\x70\145"] . "\40\103\x48\101\x52\x41\103\x54\105\122\40\x53\105\124\40" . $this->CHARACTER_SET; goto gJ9cY; gJ9cY: $modify_field .= isset($fields[$n]["\104\x65\x66\141\165\154\164"]) && $fields[$n]["\x44\x65\x66\x61\165\x6c\164"] != '' ? "\40\104\105\106\101\x55\x4c\124\40\x27" . $fields[$n]["\104\x65\x66\141\x75\x6c\164"] . "\47" : ''; goto e7umb; sEZeP: N8WdD: goto DnYhD; m9GAY: GOnSC: goto fS0O9; Xfq1v: $modify_field = ''; goto nVzBr; WegoD: $add_field .= isset($field["\116\165\154\x6c"]) && $field["\x4e\x75\154\154"] == "\131\105\123" ? "\40\116\165\x6c\154" : ''; goto F9hAR; wWHKa: $add_field .= isset($field["\105\170\x74\162\x61"]) && $field["\105\170\164\x72\141"] != '' ? "\40" . $field["\105\170\x74\162\141"] : ''; goto YYfb9; o_XwO: $previous_field = $fields[$n]["\106\151\x65\x6c\144"]; goto Opa8C; dUriq: $sql_commands_to_run[] = $modify_field; goto Skzad; DnYhD: $n++; goto n_0Z0; Skzad: kLzKR: goto sEZeP; DSSYQ: $sql_commands_to_run[] = $add_field; goto JfXuY; tar8o: $differences = array_diff($fields[$n], $destination_field_structures[$table][$n]); goto fgdiR; Opa8C: dRfFG: goto BCr5g; F9hAR: $add_field .= "\40\x44\x45\x46\x41\125\114\124\x20" . $field["\x44\145\146\141\165\154\164"]; goto wWHKa; HRKLT: $modify_field .= "\x3b"; goto CocRp; Bn4bd: if (!(isset($fields[$n]) && isset($destination_field_structures[$table][$n]) && $fields[$n]["\106\x69\145\154\144"] == $destination_field_structures[$table][$n]["\106\151\145\154\x64"])) { goto dRfFG; } goto tar8o; u7aDd: if ($this->in_array_recursive($field["\106\x69\145\154\x64"], $destination_field_structures[$table])) { goto Jdth6; } goto wDVya; R7Iiq: if (!($n < count($fields))) { goto OUvKy; } goto Bn4bd; svh7o: oZsng: goto m9GAY; CocRp: ag0By: goto o_XwO; wDVya: $add_field = "\101\114\124\x45\x52\40\124\101\102\114\105\40{$table}\x20\x41\104\104\40\x43\x4f\114\x55\115\x4e\40\x60" . $field["\106\x69\x65\x6c\x64"] . "\140\x20" . $field["\124\171\x70\145"] . "\40\103\110\x41\x52\101\103\x54\x45\122\x20\x53\x45\x54\x20" . $this->CHARACTER_SET; goto WegoD; fgdiR: if (!(is_array($differences) && !empty($differences))) { goto ag0By; } goto BwFgW; Rmyso: Jdth6: goto Xfq1v; YYfb9: $add_field .= "\73"; goto DSSYQ; n_0Z0: goto DzuLV; goto Mpz0h; Avj4H: DzuLV: goto R7Iiq; JfXuY: goto oZsng; goto Rmyso; BCr5g: if (!($modify_field != '' && !in_array($modify_field, $sql_commands_to_run))) { goto kLzKR; } goto dUriq; nVzBr: $n = 0; goto Avj4H; fS0O9: } goto xS_ki; mSbFi: } goto GgtDA; zWXP1: return $sql_commands_to_run; goto hN41O; GgtDA: MmGiu: goto zWXP1; MxFT4: $sql_commands_to_run = array(); goto zTtsW; hN41O: } function in_array_recursive($needle, $haystack, $strict = false) { goto nBcaK; nBcaK: foreach ($haystack as $array => $item) { goto fHFFX; zi0OU: mj1MF: goto icCgY; fHFFX: $item = $item["\106\151\x65\x6c\144"]; goto al1hD; WoR02: return true; goto Vm5We; Vm5We: orTHI: goto zi0OU; al1hD: if (!(($strict ? $item === $needle : $item == $needle) || is_array($item) && in_array_recursive($needle, $item, $strict))) { goto orTHI; } goto WoR02; icCgY: } goto tSbZO; tSbZO: OIivz: goto r1EEN; r1EEN: return false; goto iC8o2; iC8o2: } }