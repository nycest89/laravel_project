<?php

namespace App\Http\Controllers;

use App\Mail\TestimonialCreated;
use App\Testimonial;
use Box\Spout\Common\Type;
use Box\Spout\Writer\Style\StyleBuilder;
use Box\Spout\Writer\WriterFactory;
use DB;
use Illuminate\Http\Request;
use Mail;

class TestimonialsController extends Controller
{
    public function index()
    {

        $testimonials = Testimonial::where('delete_flag', '0')->orderBy('received_date')->paginate(5);
        return view('testimonials.index', ['testimonials' => $testimonials]);
    }

    public function create()
    {
        $status = ([
            '' => '',
            'Approved' => 'Approved',
            'Rejected' => 'Rejected',
            'Cancelled' => 'Cancelled',
        ]);
        return view('testimonials.create', compact('status'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $vendor = Testimonial::create(
            [
                'name' => $request->name,
                'code' => $request->code,
                'contact_no' => $request->contact_no,
                'location' => $request->location,
                'id_no' => $request->id_no,
                'product_cat' => $request->product_cat,
                'received_date' => $request->received_date,
                'link' => $request->link,
                'published_date' => $request->published_date,
                'status' => $request->status,
                'reward_product' => $request->reward_product,
                'srn_no' => $request->srn_no,
                'evoucher' => $request->evoucher,
                'platform' => $request->platform,
                'caregiver_name' => $request->caregiver_name,
                'caregiver_code' => $request->caregiver_code,
                'caregiver_contact_no' => $request->caregiver_contact_no,
                'caregiver_status' => $request->caregiver_status,
                'caregiver_reward_product' => $request->caregiver_reward_product,
                'caregiver_srn_no' => $request->caregiver_srn_no,
                'caregiver_evoucher' => $request->caregiver_evoucher,
            ]
        );

        $email = "fara@mail.com";
        Mail::to($email)->send(new TestimonialCreated());

        return redirect()->route('testimony')->with('success', 'Testimonial Saved!');
    }

    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        return view('testimonials.show', ['testimonial' => $testimonial]);
    }

    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        $status = ([
            '' => '',
            'Approved' => 'Approved',
            'Rejected' => 'Rejected',
            'Cancelled' => 'Cancelled',
        ]);
        return view('testimonials.edit', ['testimonial' => $testimonial, 'status' => $status]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $testimonial = Testimonial::find($id);
        $testimonial->update(
            [
                'name' => $request->name,
                'code' => $request->code,
                'contact_no' => $request->contact_no,
                'location' => $request->location,
                'id_no' => $request->id_no,
                'product_cat' => $request->product_cat,
                'received_date' => $request->received_date,
                'link' => $request->link,
                'published_date' => $request->published_date,
                'status' => $request->status,
                'reward_product' => $request->reward_product,
                'srn_no' => $request->srn_no,
                'evoucher' => $request->evoucher,
                'platform' => $request->platform,
                'caregiver_name' => $request->caregiver_name,
                'caregiver_code' => $request->caregiver_code,
                'caregiver_contact_no' => $request->caregiver_contact_no,
                'caregiver_status' => $request->caregiver_status,
                'caregiver_reward_product' => $request->caregiver_reward_product,
                'caregiver_srn_no' => $request->caregiver_srn_no,
                'caregiver_evoucher' => $request->caregiver_evoucher,
            ]
        );

        return redirect()->route('testimony.show', $id)->with('success', 'Testimonial Updated!');
    }

    public function remove($id)
    {

        $testimonial = Testimonial::find($id);
        $testimonial->update(
            [
                'delete_flag' => '1',
            ]
        );

        return redirect()->route('testimony')->with('success', 'Testimonial Deleted!');
    }

    public function export(Request $request)
    {
        $sql = "SELECT IFNULL(code,'-'), name, contact_no, location, IFNULL(id_no,'-'), product_cat, received_date, link, published_date, status, reward_product, srn_no,
        CONCAT(IFNULL(caregiver_name, ''),IF(ISNULL(caregiver_code),'',CONCAT('(CBO Code ', caregiver_code,')')),'\n',IFNULL(caregiver_contact_no,'')) as caregiver,
        caregiver_status, caregiver_reward_product, caregiver_srn_no
        FROM testimonials WHERE delete_flag=0 ORDER BY received_date";
        $records = DB::select($sql);

        $headerArray[] = [
            'Code',
            'Name',
            'Phone No',
            'Location',
            'IC No',
            'Product/ Category',
            'Date Received',
            'Link',
            'Date Published',
            'Status',
            'Reward Product',
            'SRN No',
            'CBO attached/ Caregiver/ Category 2',
            'Status',
            'Reward Product',
            'SRN No',
        ];

        foreach ($records as $record) {
            $record = (array) $record;
            $headerArray[] = (array) $record;
        }

        $style = (new StyleBuilder())
            ->setShouldWrapText(false)
            ->build();

        $writer = WriterFactory::create(Type::XLSX);

        $writer->openToBrowser('Testimonials.xlsx');
        $writer->addRowsWithStyle($headerArray, $style); // style will be applied to all given rows
        $writer->close();
        //return "test";
    }
}
