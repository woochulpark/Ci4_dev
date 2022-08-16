<?
namespace App\Publishers;

use CodeIgniter\Publisher\Publisher;

class BootstrapPublisher extends Publisher
{
    /** * 파일을 받을 위치를 게시자에게 알려줍니다. * Composer를 사용하여 다운로드할 것이기 때문에 * "vendor" 디렉토리를 가리킵니다. * * @var 문자열 */
    protected $source = 'bootstrap/';

    /** * FCPATH는 항상 기본 대상이지만 * 정리를 유지하기 위해 * 하위 폴더로 이동하기를 원할 수 있습니다. * * @var 문자열 */
    protected $destination = FCPATH . 'bootstrap';

    /** * 이 클래스가 발견되고 자동화될 준비가 되었음을 나타내기 위해 "게시" 메소드를 사용하십시오. * * @return 부울 */
    public function publish(): bool
    {
        return $this
            // $source와 관련된 모든 파일 추가
            ->addPath('dist')

            // 최소화된 버전만 원한다는 것을 나타냅니다.
            ->retainPattern('*.min.*')

            // 원래 디렉토리 구조를 유지하기 위해 병합 및 바꾸기
            ->merge(true);
    }
}
?>