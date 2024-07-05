# Phân tích nhân viên trong dự án Fintech bằng SQL
Kho dữ liệu này bao gồm các tập tin và dự án liên quan đến nhân viên, dự án và trách nhiệm phòng ban trong một tổ chức fintech. Kho dữ liệu này có thể được sử dụng cho mục đích phân tích dữ liệu, quản lý dự án và phân bổ tài nguyên trong tổ chức.
## Thông tin về tập dữ liệu
Đây là một bộ tài liệu về dự án, nhân viên và trách nhiệm của các phòng ban trong một tổ chứ fintech, đây là dữ liệu hư cấu phục vụ cho họp tập.
Gồm 3 bảng: `employees`, `projects`, `project_department`
### Bảng 1: Employees
- `employee_id`: Mã định danh duy nhất của nhân viên
- `first_name`: Tên của nhân viên.
- `last_name`: Họ của nhân viên.
- `age`: Tuổi của nhân viên.
- `gender`: Giới tính của nhân viên.
- `dob`: Ngày sinh của nhân viên.
- `date_joined`: Ngày gia nhập tổ chức của nhân viên.
- `date_resigned`: Ngày nhân viên rời khỏi tổ chức.
- `department`: Phòng ban mà nhân viên được phân công.
- `salary`: Mức lương hàng năm của nhân viên.
- `performance_level`: Mức đánh giá hiệu suất của nhân viên (ví dụ: Xuất sắc, Vượt, Đạt, Dưới, 1, 2, 3, 4, 5).
### Bảng 2: Projects
- `project_id`: Mã định danh duy nhất cho mỗi dự án.
- `employee_id`: Mã định danh của nhân viên được phân công cho dự án.
- `start_date`: Ngày bắt đầu dự án.
- `end_date`: Ngày dự kiến hoàn thành (hoặc đã hoàn thành) dự án.
- `project_status`: Tình trạng hiện tại của dự án (ví dụ: Đang tiến hành, Đã hoàn thành).
- `department`: Phòng ban liên quan đến dự án.
### Bảng 3: Project_department
- `project_id`: Mã định danh duy nhất cho mỗi dự án.
- `project_name`: Tên của dự án.
- `lead_department`: Phòng ban chủ trì hoặc chính chịu trách nhiệm cho dự án.
