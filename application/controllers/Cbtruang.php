<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtruang extends CI_Controller { public function __construct() { goto J2E5g; J2E5g: parent::__construct(); goto psgIn; a4Buz: $this->load->model("\x43\x62\164\137\x6d\157\144\145\154", "\143\142\164"); goto pzJpS; AS3BM: $this->load->model("\115\x61\163\164\x65\162\x5f\x6d\x6f\x64\x65\154", "\x6d\141\x73\x74\145\162"); goto KvF_A; Yk7aW: goto YS73j; goto BiSjE; KvF_A: $this->load->model("\x44\141\163\x68\x62\157\x61\x72\x64\137\x6d\157\x64\x65\x6c", "\144\141\163\150\x62\x6f\141\x72\144"); goto a4Buz; wpxCW: show_error("\x48\x61\156\x79\x61\40\x41\144\155\151\x6e\x69\x73\x74\162\x61\x74\x6f\162\40\x79\x61\156\x67\40\144\151\x62\145\x72\x69\40\150\x61\153\40\x75\x6e\164\x75\x6b\40\x6d\x65\156\147\x61\x6b\163\x65\x73\40\x68\141\x6c\141\x6d\x61\156\x20\151\x6e\x69\54\x20\x3c\x61\40\x68\162\x65\146\x3d\x22" . base_url("\x64\x61\163\150\142\x6f\x61\x72\x64") . "\42\x3e\x4b\x65\x6d\142\141\154\x69\x20\x6b\145\x20\155\x65\156\x75\x20\x61\167\141\154\74\57\x61\76", 403, "\101\x6b\163\x65\x73\40\x54\x65\x72\x6c\141\x72\x61\x6e\x67"); goto w0ToU; v30n4: redirect("\141\x75\164\x68"); goto P0Kho; w0ToU: lnkHO: goto Yk7aW; pzJpS: $this->form_validation->set_error_delimiters('', ''); goto B1Hly; BiSjE: LOMI1: goto v30n4; P0Kho: YS73j: goto RuILa; WeIbM: if ($this->ion_auth->is_admin()) { goto lnkHO; } goto wpxCW; psgIn: if (!$this->ion_auth->logged_in()) { goto LOMI1; } goto WeIbM; RuILa: $this->load->library(["\144\141\164\x61\164\141\x62\154\x65\x73", "\x66\157\x72\155\137\x76\141\154\151\x64\x61\x74\x69\157\x6e"]); goto AS3BM; B1Hly: } public function output_json($data, $encode = true) { goto BZraZ; EVaqj: $data = json_encode($data); goto d7oJq; BZraZ: if (!$encode) { goto G5jTU; } goto EVaqj; P9xOH: $this->output->set_content_type("\x61\x70\x70\154\151\x63\141\x74\x69\x6f\156\x2f\152\x73\157\x6e")->set_output($data); goto bUX3Y; d7oJq: G5jTU: goto P9xOH; bUX3Y: } public function index() { goto hCvuR; hCvuR: $user = $this->ion_auth->user()->row(); goto I10Wz; fcJG2: $this->load->view("\143\x62\x74\57\162\165\141\156\x67\x2f\144\x61\x74\x61"); goto L0QcP; fo3HU: $data["\x74\160"] = $this->dashboard->getTahun(); goto dtVME; Ep_PY: $this->load->view("\137\164\x65\x6d\x70\x6c\141\x74\145\x73\x2f\144\141\x73\x68\x62\x6f\141\x72\144\57\137\150\x65\x61\144\145\x72", $data); goto fcJG2; I10Wz: $data = ["\165\163\145\162" => $user, "\152\x75\x64\x75\154" => "\122\x75\141\x6e\x67\40\125\x6a\151\x61\156", "\163\x75\142\152\x75\x64\x75\x6c" => "\104\x61\x74\x61\40\x52\165\x61\x6e\x67\40\x55\152\151\141\x6e", "\160\162\157\146\x69\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\x69\156\147" => $this->dashboard->getSetting()]; goto fo3HU; dtVME: $data["\x74\x70\137\141\x63\164\x69\x76\145"] = $this->dashboard->getTahunActive(); goto TLwV0; WSayw: $data["\x73\x6d\164\x5f\x61\143\x74\151\x76\145"] = $this->dashboard->getSemesterActive(); goto Ep_PY; TLwV0: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto WSayw; L0QcP: $this->load->view("\137\164\x65\x6d\x70\x6c\x61\164\145\163\x2f\x64\x61\163\x68\x62\x6f\141\x72\x64\57\137\x66\157\x6f\x74\145\162"); goto XkFbn; XkFbn: } public function data() { $this->output_json($this->cbt->getRuang(), false); } public function add() { goto MFfYI; C0SJR: $this->output_json($data); goto cEnD1; dqrIx: $data["\163\164\141\x74\x75\x73"] = $insert; goto C0SJR; f9KK6: $this->master->create("\x63\x62\164\137\162\x75\x61\x6e\x67", $insert, false); goto dqrIx; MFfYI: $insert = ["\x6e\x61\x6d\x61\137\162\165\141\x6e\147" => $this->input->post("\156\x61\x6d\141\137\x72\x75\141\x6e\147", true), "\x6b\157\144\x65\137\x72\x75\141\x6e\147" => $this->input->post("\153\157\144\145\x5f\x72\165\141\x6e\x67", true)]; goto f9KK6; cEnD1: } public function update() { $data = $this->cbt->updateRuang(); $this->output->set_content_type("\141\x70\x70\154\x69\x63\141\164\151\x6f\156\x2f\x6a\163\157\x6e")->set_output($data); } public function delete() { goto gQSAW; Dt16g: if (!$chk) { goto pY_wq; } goto RtDqK; RtDqK: if (!$this->master->delete("\143\142\164\x5f\x72\165\141\x6e\147", $chk, "\x69\x64\137\x72\165\141\156\x67")) { goto oq9fs; } goto qWYgd; Rc4zF: $this->output_json(["\163\164\141\x74\165\x73" => false]); goto CyS3s; CyS3s: u7WHd: goto IZq5r; qWYgd: $this->output_json(["\x73\x74\141\x74\165\163" => true, "\164\x6f\164\141\154" => count($chk)]); goto h9VhM; h9VhM: oq9fs: goto utLOJ; nvlCu: pY_wq: goto Rc4zF; utLOJ: goto u7WHd; goto nvlCu; gQSAW: $chk = $this->input->post("\x63\x68\x65\x63\x6b\145\x64", true); goto Dt16g; IZq5r: } }
