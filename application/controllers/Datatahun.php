<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\x53\x45\x50\x41\x54\x48") or exit("\x4e\157\40\144\x69\162\x65\143\x74\x20\x73\143\162\151\x70\164\x20\141\143\x63\x65\x73\163\x20\x61\154\x6c\x6f\167\x65\x64"); class Datatahun extends CI_Controller { public function __construct() { goto e_Nd9; JvNvz: $this->load->model("\104\141\163\x68\142\157\141\162\x64\137\155\x6f\x64\145\x6c", "\144\x61\x73\x68\142\157\x61\x72\x64"); goto PdJn6; PdJn6: $this->load->model("\x4c\157\x67\x5f\x6d\157\144\145\154", "\154\x6f\x67\x67\x69\x6e\x67"); goto Nwjx8; PsqIO: $this->load->library(["\144\x61\164\141\164\x61\x62\154\145\163", "\x66\x6f\x72\x6d\x5f\x76\x61\154\151\144\x61\x74\151\157\156"]); goto blD2h; OwBnw: f91wn: goto gy2HP; NB_iI: if ($this->ion_auth->is_admin()) { goto vWhn0; } goto en78a; tPT_a: kghDi: goto PsqIO; blD2h: $this->load->model("\115\141\163\164\145\x72\x5f\x6d\x6f\x64\x65\x6c", "\x6d\x61\163\x74\145\162"); goto JvNvz; gy2HP: redirect("\x61\165\164\x68"); goto tPT_a; e_Nd9: parent::__construct(); goto b7GtN; Nwjx8: $this->form_validation->set_error_delimiters('', ''); goto hv7Lw; BtHGw: vWhn0: goto Mi7vi; en78a: show_error("\110\x61\x6e\171\x61\x20\101\144\155\x69\156\151\x73\164\x72\141\x74\157\162\40\171\x61\x6e\147\40\x64\x69\142\145\162\151\40\150\141\153\40\x75\156\164\165\x6b\40\155\x65\156\147\141\x6b\163\145\x73\x20\150\x61\x6c\x61\x6d\141\156\40\151\x6e\x69\x2c\x20\x3c\141\40\x68\162\x65\x66\x3d\42" . base_url("\x64\x61\x73\x68\x62\x6f\x61\x72\144") . "\x22\x3e\x4b\x65\155\x62\141\154\151\40\x6b\145\40\155\x65\x6e\165\40\x61\167\141\154\x3c\x2f\x61\76", 403, "\101\153\163\145\x73\40\124\145\162\154\141\162\141\156\147"); goto BtHGw; Mi7vi: goto kghDi; goto OwBnw; b7GtN: if (!$this->ion_auth->logged_in()) { goto f91wn; } goto NB_iI; hv7Lw: } public function output_json($data, $encode = true) { goto Dg9sv; Dg9sv: if (!$encode) { goto YYiw8; } goto OrKwv; OrKwv: $data = json_encode($data); goto jXc3z; jXc3z: YYiw8: goto OEuTL; OEuTL: $this->output->set_content_type("\x61\160\160\154\x69\143\x61\x74\151\157\156\x2f\x6a\163\157\156")->set_output($data); goto mktHX; mktHX: } public function index() { goto ZMidh; iwbvx: $smt = $this->dashboard->getSemesterActive(); goto zXiJt; N2RlU: $jml = $this->master->getJmlHariEfektif($tp->id_tp . $smt->id_smt); goto oCPF0; ZMidh: $user = $this->ion_auth->user()->row(); goto x6Zvr; oCPF0: $data["\x6a\155\154\137\x68\x61\162\151"] = $jml == null ? "\60" : $jml->jml_hari_efektif; goto S7dgc; C3YBH: $this->load->view("\155\x61\163\x74\x65\x72\57\164\x61\150\165\x6e\57\144\141\x74\141"); goto V2ZsT; R3kz1: $data["\163\155\164"] = $this->dashboard->getSemester(); goto JymcX; IqUM7: $tp = $this->dashboard->getTahunActive(); goto iwbvx; S7dgc: $this->load->view("\x5f\164\x65\155\x70\154\141\x74\145\163\x2f\x64\141\x73\150\142\x6f\141\x72\x64\57\x5f\150\145\x61\144\145\x72", $data); goto C3YBH; zXiJt: $data["\164\160"] = $this->dashboard->getTahun(); goto ZpdaC; JymcX: $data["\x73\x6d\164\137\x61\143\164\151\166\145"] = $smt; goto N2RlU; V2ZsT: $this->load->view("\x5f\x74\x65\155\160\154\x61\x74\145\163\57\x64\141\x73\150\142\157\141\x72\x64\57\137\146\x6f\157\164\145\x72"); goto IZMD5; ZpdaC: $data["\164\160\137\141\143\x74\151\166\x65"] = $tp; goto R3kz1; x6Zvr: $data = ["\165\163\x65\x72" => $user, "\152\x75\x64\x75\154" => "\124\141\150\165\x6e\x20\x50\145\x6c\x61\152\141\x72\141\156\40\144\141\x6e\40\123\145\x6d\x65\x73\x74\145\x72", "\163\x75\142\152\165\x64\165\x6c" => "\x41\x74\165\162\x20\124\141\x68\x75\156\x20\120\x65\x6c\x61\x6a\x61\162\x61\156\40\x64\x61\x6e\40\123\x65\x6d\145\163\164\145\162", "\160\162\x6f\146\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\x69\156\147" => $this->dashboard->getSetting()]; goto IqUM7; IZMD5: } public function data() { $this->output_json($this->dashboard->getDataTahun(), false); } public function gantiTahun() { goto bxFeV; FmVtu: $inputTp = json_decode($this->input->post("\164\x61\150\165\156", false)); goto CUOer; LF0Sq: $this->output_json($data); goto IiXc7; jOz1v: $this->logging->saveLog(4, "\x6d\x65\x6e\147\147\x61\x6e\164\151\40\164\141\150\x75\156\x20\x61\152\x61\x72\x61\156\x20\141\x6b\x74\151\x66"); goto LF0Sq; bxFeV: $aktif = $this->input->post("\141\143\x74\151\x76\145", true); goto FmVtu; dYk5X: $data["\x6d\x73\x67"] = "\x4d\x65\162\x75\142\x61\150\x20\124\141\150\x75\156\40\x41\153\x74\151\x66"; goto m54i7; oT9xe: $data["\163\164\141\164\165\x73"] = true; goto jOz1v; lfD7L: $this->dashboard->update("\155\x61\163\x74\x65\x72\137\164\x70", $update, "\x69\x64\137\x74\x70", null, true); goto dYk5X; nVDxI: uAe3H: goto lfD7L; CUOer: foreach ($inputTp as $tps) { goto PLa6x; BUn6I: goto DlWV2; goto qmXcX; RzV13: $active = 1; goto aMHgV; PLa6x: $id_tp = $tps->id; goto np2N_; qmXcX: uE_rj: goto RzV13; m2496: $active = 0; goto BUn6I; lOjx1: $update[] = array("\151\144\x5f\x74\160" => $id_tp, "\164\x61\x68\x75\x6e" => $tahun, "\x61\x63\x74\x69\166\145" => $active); goto uowUo; uowUo: Mjh1l: goto FEydU; np2N_: $tahun = $tps->tp; goto XMF99; aMHgV: DlWV2: goto lOjx1; XMF99: if ($id_tp === $aktif) { goto uE_rj; } goto m2496; FEydU: } goto nVDxI; m54i7: $data["\x75\160\144\x61\164\145"] = $update; goto oT9xe; IiXc7: } public function gantiSemester() { goto eOjU4; YpatC: $this->output_json($data); goto SlPUp; fEZvz: $data["\163\x74\x61\164\x75\x73"] = true; goto s4wxF; HR4B0: $this->dashboard->update("\x6d\141\x73\x74\145\x72\137\163\155\164", $update, "\151\144\x5f\163\x6d\164", null, true); goto ZoYdB; q1N1N: foreach ($inputSmt as $tps) { goto JoSmV; WYWWE: $active = 0; goto qjQTG; RYjZY: if ($id_smt === $aktif) { goto UsIIs; } goto WYWWE; ga33G: $update[] = array("\x69\x64\137\x73\155\164" => $id_smt, "\x73\x6d\x74" => $smt, "\x61\x63\164\x69\166\x65" => $active); goto LmYq4; hseH2: $smt = $tps->Semester; goto RYjZY; LmYq4: VJHVR: goto v_yCH; qjQTG: goto VCetm; goto Dbf97; JoSmV: $id_smt = $tps->id; goto hseH2; zRJ59: VCetm: goto ga33G; Dbf97: UsIIs: goto B2tG5; B2tG5: $active = 1; goto zRJ59; v_yCH: } goto acISx; FgRpg: $inputSmt = json_decode($this->input->post("\x73\x65\155\x65\163\164\x65\162", false)); goto q1N1N; s4wxF: $this->logging->saveLog(4, "\155\x65\156\147\x67\x61\x6e\164\151\x20\163\x65\155\x65\x73\x74\145\162\40\x61\x6b\x74\151\x66"); goto YpatC; acISx: vUdD4: goto HR4B0; eOjU4: $aktif = $this->input->post("\x61\x63\164\x69\x76\x65", true); goto FgRpg; ZoYdB: $data["\x6d\x73\147"] = "\x4d\145\162\x75\142\x61\x68\x20\x53\x65\155\x65\163\164\x65\162\x20\x41\x6b\164\x69\146"; goto iboX_; iboX_: $data["\165\x70\144\x61\x74\145"] = $update; goto fEZvz; SlPUp: } public function add() { goto SzDcA; Sj8jY: $data = $this->master->create("\x6d\x61\x73\x74\145\162\137\164\160", $insert); goto nUHIF; mz8Lc: kRNaV: goto WOHfN; Vc59F: goto kRNaV; goto dSU0A; nUHIF: $this->logging->saveLog(3, "\x6d\x65\156\141\155\x62\141\x68\x20\x74\x61\x68\x75\x6e\x20\x70\145\x6c\x61\x6a\141\162\x61\x6e"); goto mz8Lc; Y552V: $tahun = $this->input->post("\164\x61\x68\x75\x6e", true); goto EPOU1; Zojos: $update = array("\x69\x64\137\164\160" => $id, "\164\x61\x68\165\156" => $tahun); goto q2aal; WOHfN: $this->output->set_content_type("\x61\x70\160\154\151\143\x61\x74\x69\x6f\156\x2f\152\x73\x6f\156")->set_output($data); goto KKeK5; VZrFU: $id = $this->input->post("\x69\144\137\164\x61\150\165\156", true); goto Zojos; SzDcA: $method = $this->input->post("\x6d\145\x74\150\157\x64", true); goto Y552V; EPOU1: if ($method === "\141\x64\144") { goto pC7bu; } goto VZrFU; ZRtSf: $insert = ["\164\x61\x68\165\x6e" => $tahun]; goto Sj8jY; dGJKf: $this->logging->saveLog(4, "\155\145\156\147\145\x64\x69\164\x20\164\x61\150\165\156\x20\x70\145\x6c\141\152\x61\162\141\156"); goto Vc59F; q2aal: $data = $this->master->update("\x6d\141\163\x74\145\162\137\x74\x70", $update, "\x69\x64\x5f\x74\x70", $id); goto dGJKf; dSU0A: pC7bu: goto ZRtSf; KKeK5: } public function saveHariEfektif() { goto brxJ1; w3eQi: $data["\x73\164\x61\x74\165\163"] = $update; goto RG9Zf; RG9Zf: $this->output_json($data); goto JIXHQ; rbX2e: $smt = $this->dashboard->getSemesterActive(); goto cw77Z; ZgdZ4: $update = $this->db->replace("\155\141\163\164\145\162\x5f\150\141\x72\x69\137\x65\x66\145\153\164\x69\x66", $input); goto w3eQi; brxJ1: $tp = $this->dashboard->getTahunActive(); goto rbX2e; cw77Z: $input = ["\x69\x64\137\x68\141\x72\151\137\x65\x66\145\153\164\x69\x66" => $tp->id_tp . $smt->id_smt, "\x6a\x6d\154\x5f\150\141\162\x69\137\145\146\145\x6b\x74\x69\x66" => $this->input->post("\x6a\155\154\x5f\x68\141\162\x69", true)]; goto ZgdZ4; JIXHQ: } public function hapusTahun() { goto UxTfC; UxTfC: $id = $this->input->post("\x68\141\160\165\163", true); goto JVYhC; cFh1d: goto cTVaM; goto gXmNn; f2N6o: $this->output_json($data); goto pJCys; HBEvd: $data["\163\164\x61\164\165\x73"] = false; goto cFh1d; M5b6f: $data["\x6d\x73\x67"] = "\x4d\145\156\x67\150\141\160\x75\163\x20\124\x61\x68\x75\156\40\x50\x65\154\141\x6a\141\162\x61\156"; goto f2N6o; X3Bzg: cTVaM: goto M5b6f; jg7Ac: $data["\163\164\x61\x74\165\x73"] = true; goto X3Bzg; gXmNn: Tm9dG: goto XL_kp; XL_kp: $this->logging->saveLog(5, "\155\x65\156\x67\x68\x61\160\x75\x73\40\164\141\150\x75\156\40\160\145\154\x61\x6a\x61\162\x61\156"); goto jg7Ac; JVYhC: if ($this->dashboard->hapus("\x6d\141\x73\x74\x65\x72\137\x74\x70", $id, "\151\144\x5f\164\x70")) { goto Tm9dG; } goto HBEvd; pJCys: } public function hapus() { goto GTcTn; GTcTn: $chk = $this->input->post("\x63\x68\x65\x63\153\145\144", true); goto QC8xU; O2hVp: if (!$this->dashboard->hapus("\x6d\x61\x73\x74\x65\162\x5f\x74\x70", $chk, "\151\144\137\164\160")) { goto X4TSW; } goto sK1mF; B0JK0: NNe1F: goto Lz4mo; x6g9X: R0pL3: goto Xje0Q; QC8xU: if (!$chk) { goto R0pL3; } goto O2hVp; eqOmH: X4TSW: goto zEkJz; ro9V0: $this->output_json(["\163\x74\141\x74\165\x73" => true, "\164\x6f\x74\141\154" => count($chk)]); goto eqOmH; Xje0Q: $this->output_json(["\x73\164\141\x74\x75\163" => false]); goto B0JK0; sK1mF: $this->logging->saveLog(5, "\x6d\x65\156\147\150\x61\x70\165\x73\x20\164\141\x68\165\x6e\x20\160\x65\154\141\152\141\x72\141\x6e"); goto ro9V0; zEkJz: goto NNe1F; goto x6g9X; Lz4mo: } }