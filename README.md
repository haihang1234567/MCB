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

## Câu hỏi và trả lời
### Phần 1
- Tìm tên của các nhân viên hiện đang làm việc trong các dự án thuộc phòng IT.
- Liệt kê tên dự án và ngày bắt đầu tương ứng cho tất cả các dự án đang tiến hành.
- Lấy tên và tuổi của các nhân viên đã từ chức sau khi làm việc hơn 3 năm.
- Tìm tổng số tiền lương đã trả cho (các) nhân viên đang làm việc trong phòng 'Tài chính'.
- Liệt kê tên dự án và tên nhân viên cho các dự án bắt đầu vào năm 2024.
- Tìm tên của các nhân viên đã làm việc trên hơn một dự án, cùng với số lượng dự án khác nhau mà họ đã tham gia.
- Tìm các (nhân viên đang làm việc) hiện đang làm việc trong phòng 'Vận hành' và có mức đánh giá hiệu suất là 'Vượt'.
- Lấy tên của các nhân viên đã tham gia trước năm 2023 và đang làm việc trên các dự án đang tiến hành.
- Lấy tên của các nhân viên có cùng họ với một nhân viên khác, cùng với các phòng ban tương ứng của họ.
- Viết câu truy vấn SQL để tìm (các) nhân viên đang làm việc có mức đánh giá hiệu suất cao hơn mức trung bình trong các phòng ban tương ứng của họ.
- Viết câu truy vấn SQL để tìm 3 phòng ban có mức lương trung bình cao nhất (cho nhân viên đang làm việc). Trả về phòng ban và mức lương trung bình, làm tròn đến 2 chữ số thập phân.
- Viết câu truy vấn SQL để tìm tên dự án và tổng số nhân viên đã tham gia trước ngày bắt đầu dự án. Trả về tên dự án và số lượng nhân viên như vậy.
- Viết câu truy vấn SQL để tìm các nhân viên chưa được phân công vào bất kỳ dự án nào nhưng chưa nghỉ hưu. Trả về employee_id, first_name, last_name, và phòng ban.
- Viết câu truy vấn SQL để tìm tên của các nhân viên đã được phân công vào các dự án mà phòng ban chủ trì là 'Tài chính' và 'IT' nhưng nhân viên không thuộc phòng 'Dịch vụ khách hàng'. Trả về employee_id, first_name, và last_name.
- Viết câu truy vấn SQL để tìm mức lương trung bình của các nhân viên cho mỗi dự án. Trả về project_id, project_name, và mức lương trung bình.
### Phần 2
- Viết câu truy vấn SQL để tìm mức lương trung bình của các nhân viên chưa nghỉ việc, được nhóm theo phòng ban và mức đánh giá hiệu suất.
- Tìm các nhân viên có thâm niên lâu nhất (sự khác biệt giữa ngày gia nhập và ngày nghỉ việc hoặc ngày hiện tại nếu họ chưa nghỉ việc) trong mỗi phòng ban.
- Viết câu truy vấn để lấy tên của các nhân viên đã làm việc trong các dự án đã hoàn thành, cùng với tên dự án và các phòng ban tương ứng của họ.
- Tìm phòng ban có mức lương trung bình cao nhất cho các nhân viên chưa nghỉ việc.
- Viết câu truy vấn để lấy tên của các nhân viên đã làm việc trong các dự án có thời gian (ngày kết thúc - ngày bắt đầu) dài hơn một số ngày nhất định (365 ngày).
- Tìm phòng ban có số lượng nhân viên đã nghỉ việc nhiều nhất.
- Tìm dự án có số lượng nhân viên được phân công cao nhất, và trả về chi tiết dự án (tên dự án, ngày bắt đầu, ngày kết thúc, tình trạng dự án) cùng với số lượng nhân viên.
- Tìm nhân viên có mức lương cao nhất và chưa nghỉ việc, được nhóm theo phòng ban.
- Tìm phòng ban có độ tuổi trung bình cao nhất của nhân viên chưa nghỉ việc.
- Tìm các phòng ban có số lượng nhân viên đã nghỉ việc nhiều nhất, và đối với mỗi phòng ban đó, trả về tên phòng ban, số lượng nhân viên đã nghỉ việc, và thời gian làm việc trung bình (tính theo ngày) của những nhân viên đã nghỉ việc.
- Viết câu truy vấn SQL để tìm các dự án có nhân viên được phân công từ ít nhất ba phòng ban khác nhau, và đối với mỗi dự án đó, trả về tên dự án, số lượng phòng ban khác nhau đại diện, và độ tuổi trung bình của các nhân viên được phân công cho dự án đó.
- Viết câu truy vấn SQL để tìm các phòng ban có mức lương trung bình cao nhất cho các nhân viên chưa nghỉ việc và có mức đánh giá hiệu suất là 'Xuất sắc', và trả về tên phòng ban và mức lương trung bình làm tròn đến số nguyên gần nhất.
- Viết câu truy vấn SQL để tìm các dự án có độ tuổi trung bình cao nhất của nhân viên được phân công, và đối với mỗi dự án đó, trả về tên dự án, độ tuổi trung bình của nhân viên làm tròn đến số nguyên gần nhất, và số lượng nhân viên được phân công cho dự án đó.
- Tìm các nhân viên đã làm việc trên số lượng dự án nhiều nhất mà có thời gian (ngày kết thúc - ngày bắt đầu) dài hơn 365 ngày, và đối với mỗi nhân viên đó, trả về tên của họ, số lượng dự án với thời gian dài hơn 365 ngày, và thời gian trung bình (tính theo ngày) của những dự án đó.
- Tìm các phòng ban có mức lương trung bình cao nhất cho các nhân viên đã làm việc trên các dự án đã hoàn thành, và trả về tên phòng ban và mức lương trung bình tương ứng.
