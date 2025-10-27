<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRController extends Controller
{
    public function employeeList()
    {
        return view('HR.employee');
    }

    public function holidays()
    {
        return view('HR.holidays');
    }

    public function leaveEmployee()
    {
        return view('HR.LeavesManage.leave-employee');
    }

    public function createLeaveEmployee()
    {
        return view('HR.LeavesManage.create-leave-employee');
    }

    public function leave()
    {
        return view('HR.LeavesManage.leave');
    }

    public function createLeave()
    {
        return view('HR.LeavesManage.create-leave');
    }

    public function attendance()
    {
        return view('HR.Attendance.attendance');
    }

    public function attendanceMain()
    {
        return view('HR.Attendance.attendance-main');
    }

    public function department()
    {
        return view('HR.department');
    }

    public function estimates()
    {
        return view('HR.Sales.estimates');
    }

    public function payments()
    {
        return view('HR.Sales.payments');
    }

    public function expenses()
    {
        return view('HR.Sales.expenses');
    }

    public function employeeSalary()
    {
        return view('HR.Payroll.employee-salary');
    }

    public function payslip()
    {
        return view('HR.Payroll.payslip');
    }

    public function createPayslip()
    {
        return view('HR.Payroll.create-payslip');
    }

}
