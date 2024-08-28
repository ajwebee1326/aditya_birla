<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ContactsExport implements FromCollection , WithHeadings , WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contact::all();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Phone',
            'Speciality',
            'Created At',
        ];
    }

    public function map($contact): array
    {
        return [
            $contact->name,
            $contact->email,
            $contact->phone,
            $contact->specialty,
            $contact->created_at,
        ];
    }
}
