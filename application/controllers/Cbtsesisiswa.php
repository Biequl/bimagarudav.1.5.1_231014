<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtsesisiswa extends CI_Controller { public function __construct() { goto N_Zzx; Qvkk8: $this->load->library(["\x64\x61\164\x61\x74\141\x62\154\145\163", "\146\x6f\x72\155\137\166\x61\154\151\x64\141\164\x69\157\156"]); goto U2qFV; JzA4e: $this->load->model("\103\x62\164\x5f\x6d\157\x64\145\x6c", "\143\142\164"); goto vplbE; Kue7W: A_LVM: goto hxrUD; VpD44: SfGVF: goto N_K3k; fwofo: $this->form_validation->set_error_delimiters('', ''); goto E2Xi3; hxrUD: redirect("\141\x75\164\x68"); goto eyC5i; N_Zzx: parent::__construct(); goto oBgh2; U2qFV: $this->load->model("\x4d\141\x73\x74\145\162\x5f\155\x6f\x64\x65\x6c", "\155\141\x73\164\145\162"); goto KfWW4; sVbqU: if ($this->ion_auth->is_admin()) { goto SfGVF; } goto DQf7v; Mz791: $this->load->model("\113\x65\x6c\x61\163\137\155\157\144\145\154", "\153\145\x6c\x61\163"); goto fwofo; DQf7v: show_error("\x48\x61\x6e\171\x61\x20\101\144\155\x69\x6e\151\163\164\x72\x61\164\x6f\162\x20\171\x61\156\x67\40\x64\x69\142\x65\x72\151\40\150\141\x6b\40\165\156\x74\165\x6b\x20\x6d\x65\x6e\147\x61\x6b\163\145\163\40\x68\141\x6c\141\155\141\x6e\x20\x69\156\151\x2c\x20\x3c\x61\x20\150\162\145\146\75\42" . base_url("\x64\x61\163\150\x62\x6f\141\162\144") . "\42\x3e\x4b\145\155\142\141\154\x69\x20\x6b\145\x20\x6d\145\x6e\165\x20\141\x77\x61\x6c\x3c\57\141\76", 403, "\x41\153\163\145\x73\40\x54\x65\162\x6c\x61\162\x61\x6e\x67"); goto VpD44; KfWW4: $this->load->model("\x44\141\163\x68\142\157\x61\x72\x64\x5f\x6d\x6f\x64\145\154", "\144\x61\163\x68\142\x6f\141\x72\x64"); goto JzA4e; oBgh2: if (!$this->ion_auth->logged_in()) { goto A_LVM; } goto sVbqU; N_K3k: goto g67uB; goto Kue7W; vplbE: $this->load->model("\x44\162\x6f\160\x64\157\167\x6e\137\155\x6f\144\145\154", "\144\162\157\160\x64\157\167\156"); goto Mz791; eyC5i: g67uB: goto Qvkk8; E2Xi3: } public function output_json($data, $encode = true) { goto FaVVl; qk8g3: eDrPU: goto QQ4aM; FaVVl: if (!$encode) { goto eDrPU; } goto MPC2p; QQ4aM: $this->output->set_content_type("\141\x70\x70\x6c\151\x63\x61\164\x69\x6f\x6e\x2f\152\163\x6f\x6e")->set_output($data); goto b23n5; MPC2p: $data = json_encode($data); goto qk8g3; b23n5: } public function index() { goto bjXRZ; ky41H: if (!($kelas_selected != "\x30")) { goto z1x1k; } goto QcxvW; ju1ee: $data["\x6b\x65\154\141\x73\x5f\x73\x65\154\145\143\164\145\144"] = $kelas_selected; goto scxvj; tTRY9: $data["\163\151\163\167\141\x73"] = $siswas; goto ju1ee; Nq35D: $kelas_selected = $kls != null ? $kls : "\60"; goto IRqYF; a8f1D: $this->load->view("\x5f\x74\x65\155\160\154\x61\x74\145\x73\x2f\144\141\x73\x68\x62\x6f\x61\162\144\57\137\146\157\157\x74\145\x72"); goto FbSxX; scxvj: $this->load->view("\137\x74\x65\155\x70\x6c\x61\164\x65\x73\x2f\x64\x61\x73\x68\x62\x6f\141\162\x64\57\137\x68\145\141\x64\x65\x72", $data); goto Jj9ow; iow2N: $user = $this->ion_auth->user()->row(); goto Wn6zb; Jj9ow: $this->load->view("\x63\142\x74\x2f\x73\145\x73\151\163\x69\x73\x77\x61\57\x64\x61\x74\x61"); goto a8f1D; IRqYF: $siswas = []; goto ky41H; bjXRZ: $tp = $this->dashboard->getTahunActive(); goto axX9m; axX9m: $smt = $this->dashboard->getSemesterActive(); goto iow2N; uwErd: z1x1k: goto tTRY9; Wn6zb: $data = ["\165\x73\x65\x72" => $user, "\x6a\x75\x64\x75\154" => "\101\164\165\162\x20\122\x75\x61\x6e\147\x20\144\141\x6e\40\123\145\x73\x69\40\123\151\163\x77\x61", "\x73\165\142\x6a\165\x64\165\154" => "\122\165\x61\x6e\x67\40\144\x61\x6e\40\x53\145\x73\151\x20\123\151\x73\x77\x61", "\163\x65\x74\x74\151\156\x67" => $this->dashboard->getSetting(), "\153\145\154\x61\x73" => $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt), "\162\x75\x61\156\x67\x5f\x6b\x65\154\x61\x73" => $this->cbt->getKelasList($tp->id_tp, $smt->id_smt), "\163\145\x73\x69" => $this->dropdown->getAllSesi(), "\162\x75\x61\156\x67" => $this->cbt->getAllRuang(), "\164\160" => $this->dashboard->getTahun(), "\x74\x70\x5f\141\x63\164\151\x76\145" => $tp, "\x73\155\x74" => $this->dashboard->getSemester(), "\163\x6d\x74\137\x61\x63\164\x69\166\145" => $smt, "\160\162\x6f\146\x69\154\145" => $this->dashboard->getProfileAdmin($user->id)]; goto BVay_; BVay_: $kls = $this->input->get("\153\154\163", true); goto Nq35D; QcxvW: $siswas = $this->cbt->getRuangSesiSiswa($kls, $tp->id_tp, $smt->id_smt); goto uwErd; FbSxX: } public function getAllRuang() { $this->output_json($this->cbt->getAllRuang()); } public function getAllSesi() { $this->output_json($this->dropdown->getAllSesi()); } public function add() { goto gjw9l; LMpBp: $this->output_json($data); goto ywB2X; gjw9l: $insert = ["\x6e\141\155\141\x5f\163\145\x73\151" => $this->input->post("\x6e\x61\155\141\x5f\x73\x65\163\151", true), "\x6b\x6f\x64\x65\x5f\x73\x65\x73\151" => $this->input->post("\x6b\157\x64\145\x5f\163\145\x73\151", true), "\x77\141\x6b\164\165\x5f\x6d\165\x6c\x61\x69" => $this->input->post("\167\141\153\164\165\x5f\x6d\x75\154\x61\x69", true), "\x77\x61\153\164\165\137\141\153\x68\151\x72" => $this->input->post("\167\x61\x6b\164\x75\137\141\153\x68\151\162", true)]; goto LFo7k; LFo7k: $this->master->create("\x63\142\164\137\x73\145\x73\151", $insert, false); goto GogXz; GogXz: $data["\x73\x74\x61\164\165\163"] = $insert; goto LMpBp; ywB2X: } public function update() { $data = $this->cbt->updateSesi(); $this->output->set_content_type("\141\x70\x70\154\x69\143\141\x74\151\157\156\57\x6a\163\x6f\156")->set_output($data); } public function delete() { goto SMRyv; YKk70: if (!$this->master->delete("\143\x62\164\x5f\x73\x65\163\151", $chk, "\x69\144\x5f\163\x65\x73\151")) { goto RiT5D; } goto r9dlg; W3oDe: if (!$chk) { goto Z9eOR; } goto YKk70; JDUVT: Z9eOR: goto gaUcS; r9dlg: $this->output_json(["\163\x74\x61\x74\165\163" => true, "\164\157\164\x61\x6c" => count($chk)]); goto s70Km; s70Km: RiT5D: goto nXBqz; nXBqz: goto AmjUI; goto JDUVT; N8oZe: AmjUI: goto T1pzy; gaUcS: $this->output_json(["\x73\x74\x61\164\165\163" => false]); goto N8oZe; SMRyv: $chk = $this->input->post("\x63\x68\145\x63\x6b\145\144", true); goto W3oDe; T1pzy: } public function editsesisiswa() { goto heQOQ; yNc5a: $smt = $this->dashboard->getSemesterActive(); goto zO6Ww; zO6Ww: $update = false; goto I3l55; KFFwQ: $this->output_json($data); goto M7CYA; jg_gg: $data["\x73\164\141\x74\x75\x73"] = $update; goto KFFwQ; bL4sx: sPXG4: goto jg_gg; I3l55: foreach ($rs as $id => $klss) { goto yJWJD; CtlxS: A2e_O: goto tRI94; xHZoe: caCzL: goto CtlxS; yJWJD: foreach ($klss as $idkls => $kls) { goto aGZLb; O11uj: bVz1F: goto yfhrl; umhTx: $update = $this->db->replace("\143\x62\x74\x5f\163\x65\x73\x69\x5f\163\151\163\x77\141", $data); goto O11uj; aGZLb: $data = ["\x73\x69\x73\167\141\x5f\151\144" => $id, "\153\145\x6c\x61\163\x5f\x69\144" => $idkls, "\x72\x75\141\x6e\x67\x5f\x69\144" => $kls["\x72\x75\141\x6e\147"], "\x73\145\163\x69\137\151\x64" => $kls["\163\x65\x73\x69"], "\164\x70\x5f\x69\144" => $tp->id_tp, "\x73\x6d\x74\x5f\x69\144" => $smt->id_smt]; goto umhTx; yfhrl: } goto xHZoe; tRI94: } goto bL4sx; heQOQ: $rs = $this->input->post("\x72\165\141\156\x67\x2d\163\x65\x73\151", true); goto URa7R; URa7R: $tp = $this->dashboard->getTahunActive(); goto yNc5a; M7CYA: } public function editsesikelas() { goto oN1E8; wk7D6: dTsSt: goto l4l1y; l4l1y: $data["\x73\164\x61\x74\165\163"] = $update; goto jnVRo; m1GHk: $tp = $this->dashboard->getTahunActive(); goto lytjT; A5f19: foreach ($input as $d) { goto kEUl0; Fuzxe: foreach ($siswas as $siswa) { goto damID; damID: $data = ["\163\x69\x73\x77\x61\x5f\151\144" => $siswa->id_siswa, "\153\145\154\141\163\137\151\144" => $siswa->id_kelas, "\x72\x75\x61\x6e\147\137\151\144" => $d->ruang_id, "\163\x65\163\x69\137\151\x64" => $d->sesi_id, "\x74\160\137\151\144" => $tp->id_tp, "\x73\155\x74\x5f\x69\x64" => $smt->id_smt]; goto dnoVy; Axi3m: oLOce: goto boS62; dnoVy: $this->db->replace("\x63\x62\x74\137\x73\145\163\x69\x5f\163\x69\163\x77\141", $data); goto Axi3m; boS62: } goto rUZz6; kEUl0: $siswas = $this->kelas->getKelasSiswa($d->kelas_id, $tp->id_tp, $smt->id_smt); goto Fuzxe; iWEow: $data = ["\x69\x64\137\x6b\x65\x6c\141\x73\x5f\162\165\x61\x6e\147" => $d->kelas_id . $tp->id_tp . $smt->id_smt, "\151\144\x5f\x6b\x65\154\x61\x73" => $d->kelas_id, "\x69\x64\137\162\165\141\156\x67" => $d->ruang_id, "\151\144\x5f\163\145\163\151" => $d->sesi_id, "\151\x64\x5f\x74\160" => $tp->id_tp, "\151\144\137\x73\x6d\164" => $smt->id_smt, "\163\145\164\x5f\x73\x69\163\x77\141" => $d->set_siswa]; goto Vg8Xu; rUZz6: SZG7j: goto iWEow; TK6MB: TbV5W: goto ex1cx; Vg8Xu: $update = $this->db->replace("\143\142\164\x5f\x6b\145\x6c\141\163\137\162\165\141\156\147", $data); goto TK6MB; ex1cx: } goto wk7D6; lytjT: $smt = $this->dashboard->getSemesterActive(); goto A5f19; jnVRo: $this->output_json($data); goto GnOB1; oN1E8: $input = json_decode($this->input->post("\x6b\145\154\141\163\137\163\145\163\151", true)); goto m1GHk; GnOB1: } }